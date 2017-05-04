<?php

class Session {
	public static $loggedIn = false;
	public static $userId = null;
	public static $userName = null;
	public static $isAdmin = false;
	
	public static function setup() {
		if(isset($_SESSION['username'])) {
            Session::$loggedIn = true;
            Session::$userId = $_SESSION['user_id'];
            Session::$userName = $_SESSION['username'];
            Session::$isAdmin = $_SESSION['is_admin'];
        }
	}
	
	public static function attemptLogout() {
		session_destroy();
        return true;
	}
	
	public static function attemptLogin() {
		if(isset($_POST['username']) && isset($_POST['password'])) {
		
			
		
            $username_safe = \Base::$con->real_escape_string($_POST['username']);
            $password_safe_md5 = md5(\Base::$con->real_escape_string($_POST['password']));

            $checklogin = \Base::$con->query("SELECT id, username, email_address, is_admin FROM users WHERE username = '$username_safe' AND password = '$password_safe_md5'");
            // Username and password combination exists
            if($checklogin->num_rows == 1) {
                $row = mysqli_fetch_array($checklogin);
                
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email_address'] = $row['email_address'];
                $_SESSION['is_admin'] = $row['is_admin'];
                
                return true;
            }
        }
        
		return false;
	}
}
