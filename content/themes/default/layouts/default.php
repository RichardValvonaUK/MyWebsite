<?php


$displayMode = null;

if (isset($_GET['display-mode'])) {
	$displayMode = $_GET['display-mode'];
}
?>
<?php if ($displayMode == null): ?>
<span class="hidden" id="param_logged_in"><?php echo $controller->loggedIn ? "true" : "false"; ?></span>
<span class="hidden" id="param_android_mode"><?php echo $controller->androidMode ? "true" : "false"; ?></span>
<div id="page"<?php if ($controller->androidMode) echo "class=\" android-mode\""; ?>>
	<header>
		<?php include BASE_DIR_CONTENT . "/views/layout-components/header.php"; ?>
		<nav id="richard1029384756-menu-bars" class="vertical-menu fixed-top-left">
			<span class="menu-wrapper">
				<?php
					$menu = new Menu('menu');
					$menu->addButton('&nbsp;&#8801;&nbsp;', true, 'menu-toggler', "onclick=\"toggleMenu()\"");
					echo $menu->generateMenu();
				?>
				<span class="social-network-links">
					<?php echo URLS::absLink(Images::create('autoheight', '1464388115_facebook.png', null, null),
						'https://www.facebook.com/richard.valvona',
						null
					); ?>
					<?php echo URLS::absLink(Images::create('autoheight', '1464387080_instagram.png', null, null),
						'https://www.instagram.com/m_r_robin/',
						null
					); ?>
					<?php echo URLS::absLink(Images::create('autoheight', '1464387946_twitter_2.png', null, null),
						'https://twitter.com/RichardValvona',
						null
					); ?>
					<?php echo URLS::absLink(Images::create('autoheight', '1464599692-youtube-square-social-media.png', null, null),
						'https://www.youtube.com/channel/UC_Dnr4KatK04R7TG_xuVG3Q/videos',
						null
					); ?>
				</span>
				<div id="mobile-menu" class="left-menu block-table-cell hidden-on-mobile">
					<?php if (!$controller->androidMode) include BASE_DIR_CONTENT . "/views/layout-components/menu.php"; ?>
				</div>
			</span>
		</nav>
	</header>
	<div id="middle-section" class="block-table" cellspacing="0" style="width: 100%;">
		<span class="space-above-main-content rect"></span>
		<div class="block-table-row">
			<div id="left-side-menu" class="left-menu block-table-cell hidden-on-mobile">
				<?php if (!$controller->androidMode) include BASE_DIR_CONTENT . "/views/layout-components/menu.php"; ?>
			</div>
			
<?php endif; ?>
			<div id="main-content" class="block-table-cell">
				<?php if ($controller->isEditingAllowed && $controller->isInEditMode) : ?>
					<?php include URLS::getViewURL("/layout-components/edit-block"); ?>
				<?php endif; ?>
				<?php include URLS::getView($view); ?>
				<div class="fb-comments" 
				data-href="<?php echo 'http://richardvalvona.uk/' . strtolower($controller->url); ?>"
				data-width="100%" data-numposts="1">
				</div>
			</div>
<?php if ($displayMode == null): ?>
		</div>
    </div>
</div>
<footer>
	<?php include BASE_DIR_CONTENT . "/views/layout-components/footer.php"; ?>
</footer>
<?php endif; ?>