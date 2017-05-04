<?php

$contentsSubDir = '/content';
$configSubDir = '/config';

define('BASE_DIR', dirname(__FILE__));
define('BASE_DIR_CONTENT', BASE_DIR . $contentsSubDir);
define('BASE_DIR_CONFIG', BASE_DIR . $configSubDir);

require(BASE_DIR_CONFIG . "/config.php");
require(BASE_DIR_CONFIG . "/base.php");

$fqdn = \Base::$fqdn; // Don't set this here. Set in /config/base.php.

if ($fqdn === null) {
	$fqdn = dirname($_SERVER['PHP_SELF']);
}

define('BASE_URL', $fqdn);
define('BASE_URL_CONTENT', $fqdn . $contentsSubDir);

define ('SECONDS_IN_DAY', 24*60*60);

function includeModel($modelName) {
	include_once (BASE_DIR_CONTENT . "/models/" . $modelName . '.php');
	return '/models/' . $modelName;
}

function includeController($controllerName) {
	include_once (BASE_DIR_CONTENT . "/controllers/" . $controllerName . '.php');
	return '/controllers/' . $controllerName . 'Controller';
}

function includeView($viewName) {
	include (BASE_DIR_CONTENT . "/views/" . $viewName . '.php');
}

function includeAllModelsInDir($dir) {
	$allJQueryFiles = scandir(BASE_DIR_CONTENT . '/models');

	foreach ($allJQueryFiles as $file) {
		if ($file === '.' || $file === '..' || substr($file, -1) === '~') continue;

		if (is_dir($file)) {
			includeAllModelsInDir($dir . '/' . $file);
		}
		else {
			include($dir . '/' . $file);
		}
	}
}

function includeAllModels() {
	includeAllModelsInDir(BASE_DIR_CONTENT . '/models');
}

require(BASE_DIR_CONTENT . "/include/model.php");
require(BASE_DIR_CONTENT . "/include/controller.php");
require(BASE_DIR_CONTENT . "/include/ajaxController.php");
//URLS::includeAllModels();

includeModel('Colours');
includeModel('Comps');
includeModel('Images');
includeModel('Heading');
includeModel('ImageGrid');
includeModel('Menu');
includeModel('Page');
includeModel('Pages');
includeModel('Session');
includeModel('URLS');
includeModel('User');


function rawToCorrectControllerName($controllerNameRaw) {
	if (trim($controllerNameRaw) === '') {
		$controllerNameRaw = 'index';
	}

	return URLS::convertToCamel($controllerNameRaw, true);
}

\Base::setup();
Session::setup();

// Making sure a default controller is used (index in this case) if none is specified
$controllerNameRaw = isset($_GET['controller']) ? $_GET['controller'] : '';
$controllerNameRaw = rtrim($controllerNameRaw,"/");

$controllerNameRawSplit = explode('/', $controllerNameRaw);
$controllerNameRaw = implode("/", $controllerNameRawSplit);
$controllerNameRawSplitLeft = explode('/', $controllerNameRaw);
$controllerNameRawSplitRight = array();

$controllerNameRawLeft;

$controllerName;
$controllerNameLeft;
$controllerURL;



for ($i=count($controllerNameRawSplitLeft); $i>=0; $i--) {
	$controllerNameRawLeft = strtolower(implode("/", $controllerNameRawSplitLeft));

	// Setting controller name
	$controllerName = rawToCorrectControllerName($controllerNameRawLeft);

	// Setting up the controller
	$controllerURL = URLS::getControllerURL($controllerName);

	if (file_exists($controllerURL)) {
		break;
	}

	// Shifting from left group to the right group
	if ($i > 0) {
		array_unshift($controllerNameRawSplitRight, array_pop($controllerNameRawSplitLeft));
	}
	else {
		$controllerNameRawLeft = array('page-not-found');
		$controllerName = rawToCorrectControllerName($controllerNameRawLeft);
		$controllerURL = URLS::getControllerURL($controllerName);
	}
}

$controllerNameFromURL = rawToCorrectControllerName($controllerNameRaw);



$controllerNameLeft;
$viewName;
$controllerNameSplit;
$controllerNameSpace;
$contollerClass;
$controllerNameUpperFirst;
$controller;

for ($i=0; $i<2; $i++) {
	// Setting view name
	$viewName = URLS::controllerNameToView($controllerName);
	
	include_once $controllerURL;

	$controllerNameSplit = explode('/', $controllerName);

	URLS::$controllerNameSpaceLink = URLS::getURLNameSpace($controllerNameSplit);

	$controllerNameSpace = URLS::getURLNameSpaceFull($controllerNameSplit);
	$contollerClass = URLS::getURLClass($controllerNameSplit);

	$controllerNameUpperFirst = $controllerNameSpace . $contollerClass . 'Controller';

	// Creating an instance of the current controller.
	$controller = new $controllerNameUpperFirst();

	if ($controllerNameFromURL !== $controllerName) {

		$controller->isSubpage = true;

		if (!$controller->canCatchSubpages()) {
			URLS::redirect('/page-not-found');
			exit;
		}
	}
	break;
}

$controller->url = $controllerNameRaw;
$controller->urlLeft = $controllerNameRawLeft;
$controller->urlRight = implode("/", $controllerNameRawSplitRight);
$controller->urlSplit = $controllerNameRawSplit;
$controller->urlSplitLeft = $controllerNameRawSplitLeft;
$controller->urlSplitRight = $controllerNameRawSplitRight;

$controller->cNameSpace = $controllerNameSpace;
$controller->cClass = $contollerClass;
$controller->title = URLS::spacesInCamelCase($contollerClass);
$controller->controllerNameRaw = $controllerNameRaw;
$controller->viewName = $viewName;

URLS::setController($controller);

URLS::$controllerName = $controllerName;

// Initialising the controller

if ($controller instanceof AjaxController) {
	$controller->doCommonInit();
	$ajaxResponse = $controller->doInit();

	if ($ajaxResponse === true) echo 'TRUE';
	else if ($ajaxResponse === false) echo 'FALSE';
	else if ($ajaxResponse !== null) echo $ajaxResponse;

	exit();
}
else {
	$controller->doCommonInit();
	$controller->doInit();
}

$view = $controller->viewName;

/* If the view doesn't exist or the controller is marked as "Page not found" then
 * redirect to "Page not found"
 */
if ($controller->pageNotFound || !file_exists(URLS::getView($view))) {
	URLS::redirect('/page-not-found');
	exit;
}


$theme = 'default';
$layout = 'default';

$layoutFile = "themes/$theme/layouts/$layout.php";

$bodyBgBrightness = Colours::brightness($controller->backgroundColour);
$bodyBgClass = $bodyBgBrightness < 128 ? 'bg-dark' : 'bg-light';

?>
<!DOCTYPE html5>
<html prefix="og: http://ogp.me/ns#" >
    <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5" />
	
	<meta property="og:title" content="<?php echo $controller->title; ?>" />
	<meta property="og:type" content="website" />
	
	<?php
		$thisWebPageLink = $controller->getLink();
		
		$allGets = array();
		
		foreach($_GET as $key => $value) {
			if ($key !== 'controller') {
				array_push($allGets, $key . '=' . $value);
			}
		}
		
		if (sizeof($allGets) == 0) {
			$thisWebPageLinkNormal = $thisWebPageLink;
		}
		else {
			$thisWebPageLinkNormal = $thisWebPageLink . '?' . join('&', $allGets);
		}
		array_push($allGets, 'display-mode=main-content-only');
		$thisWebPageLinkDisplayMainContentOnly = $thisWebPageLink . '?' . join('&', $allGets);
	?>
	
	<meta property="og:url" content="<?php echo $thisWebPageLinkNormal; ?>" />
	
	
	<meta property="og:image" content="<?php echo $thisWebPageLinkDisplayMainContentOnly; ?>" />
	
	<?php if ($controller->metaThemeColour != null): ?>
		<meta name="theme-color" content="<?php echo $controller->metaThemeColour; ?>" />
		<meta name="msapplication-navbutton-color" content="<?php echo $controller->metaThemeColour; ?>" />
	<?php endif; ?>
	<title><?php echo $controller->title; ?></title>
	<style>
		body {
			background-color: <?php echo $controller->backgroundColour; ?>;
		}
	</style>

	<script type="text/javascript">
	    var linkToPage = function(page) {
		    return "<?php echo BASE_URL; ?>/" + page;
	    };

	    var linkToAjax = function(page) {
		    return BASE_URL_CONTENT + "/" + page;
	    };

	    var runScript = function(script, data, type, callback) {
		    data.script = script;

		    var scriptURL = BASE_DIR_CONTENT + "/run_script.php";

		    $.ajax({ type: type, url: scriptURL, data: data })
		    .done(function( response ) {
		        callback(response);
		    });
        };

        var redirectToPage = function(page) {
    		$(location).attr('href', linkToPage(page));
        };

        const ajaxBase = "<?php echo BASE_URL_CONTENT; ?>/ajax/";

	</script>
    <?php

    URLS::includeJQueryFiles();
    URLS::includeMainJSFiles();
    URLS::includeMainCSSFiles();

    echo $controller->customHeaderCode;

    $potentialPageJSFile = URLS::getJSURL($view);
    $potentialPageCSSFile = URLS::getCSSURL($view);

    if (file_exists(URLS::getJSURLLocal($view))) {
    	echo "<script src=\"$potentialPageJSFile\"></script>";
    }

    if (file_exists(URLS::getCSSURLLocal($view))) {
	    echo "<link href=\"$potentialPageCSSFile\" rel=\"stylesheet\" type=\"text/css\" />";
    }

    ?>
    </head>
    <body class='<?php echo $bodyBgClass; ?>' <?php echo $controller->getCustomBodyAttributes(); ?>>
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=200469133487704";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
    	<div class="site-wrapper">
	        <?php include BASE_DIR_CONTENT. '/' . $layoutFile; ?>
        </div>
    </body>
</html>
