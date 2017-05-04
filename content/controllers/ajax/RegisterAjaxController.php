<?php

namespace ajax;
use \AjaxController;

class RegisterAjaxController extends AjaxController {
	
	public function doInit() {
        if($this->loggedIn) return false;
        else if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        
			if (strlen($_POST['username']) < 5) {
				return 10;
			}
        
            $username = $this->con->real_escape_string($_POST['username']);
			$password = md5($this->con->real_escape_string($_POST['password']));
			$email = $this->con->real_escape_string($_POST['email']);
		 
			$checkUsername = $this->con->query("SELECT * FROM users WHERE username = '$username'");
			
			$userExists = mysqli_num_rows($checkUsername) == 1;
			
			if (!$userExists) {
				$registerQuery = $this->con->query("INSERT INTO users (username, timestamp_in_seconds, password, email_address) VALUES('$username',".time()." , '$password', '$email')");
				
				if ($registerQuery) {
					return true;
				}
			}
        }
        
        return false;
    }
}
