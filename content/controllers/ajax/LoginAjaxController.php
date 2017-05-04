<?php

namespace ajax;
use \AjaxController;

class LoginAjaxController extends AjaxController {
	
	public function doInit() {
        if($this->loggedIn) return true;
        else if(isset($_POST['username']) && isset($_POST['password'])) {
        
            $usernameEntered = $this->con->real_escape_string($_POST['username']);
            $password = md5($this->con->real_escape_string($_POST['password']));

            $checklogin = $this->con->query("SELECT * FROM users WHERE username = '$usernameEntered' AND password = '$password'");
            // Username and password combination exists
            if($checklogin->num_rows == 1) {
                $row = mysqli_fetch_array($checklogin);
                
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['email_address'] = $row['email_address'];
                $_SESSION['is_admin'] = $row['is_admin'];
                
                // Redirect to task page
                return true;
            }
        }
        
        return false;
    }
}
