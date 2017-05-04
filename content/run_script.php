<?php

    session_start();

    include("include/scripts/db_info.php");
    include("include/scripts/check_login.php");
    
    // Not logged in by default and only a matching username and login key means the user is logged in.
    $loggedIn = false;
    $loggedInUserid = '';
    $userVerified = false;
    $userApproved = false;
    $showPageForUser = false;
    $isAdmin = false;
    $userid = '';
    if (isset($_SESSION["loggedinuserid"]) && isset($_SESSION["loginKey"])) {
	$userinfo = Login::checkLogin($link, $_SESSION["loggedinuserid"], $_SESSION["loginKey"]);
	
	$userVerified = $userinfo['user_verified'] === '1';
	$userApproved = $userinfo['user_approved'] === '1';
	$isAdmin = $userinfo['is_admin'] === '1';
	
	$loggedIn = $userinfo !== false;
	$loggedInUserid = $_SESSION["loggedinuserid"];
	
	$loggedInUserid = stripslashes($loggedInUserid);
	$loggedInUserid = mysql_real_escape_string($loggedInUserid);
	
	if (isset($_GET['userid'])) {
	    $userid = $_GET['userid'];
	    
	    if ($userid === $loggedInUserid) $showPageForUser = true;
	    else {
		$otherUserInfo = User::checkUser($link, $userid);
		$showPageForUser = $userApproved && $otherUserInfo['user_approved'] === '1';
	    }
	}
	else if (isset($_POST['userid'])) {
	    $userid = $_POST['userid'];
	    
	    if ($userid === $loggedInUserid) $showPageForUser = true;
	    else {
		$otherUserInfo = User::checkUser($link, $userid);
		$showPageForUser = $userApproved && $otherUserInfo['user_approved'] === '1';
	    }
	}
	else {
	    $userid = $loggedInUserid;
	    $showPageForUser = true;
	}
	
	// Admin mode grants access to every page
	if ($isAdmin) {
	    $showPageForUser = true;
	}

	$userid = stripslashes($userid);
	$userid = mysql_real_escape_string($userid);
    }
    else {
	$showPageForUser = true;
    }

    $loginKey = $userinfo['login_key'];

    $script;

    if (isset($_POST['script'])) $script = $_POST['script'];
    else if (isset($_GET['script'])) $script = $_GET['script'];
    else exit();

    include("ajax/$script.php");
?>