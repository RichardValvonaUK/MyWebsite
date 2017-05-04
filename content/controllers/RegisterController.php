<?php

namespace controllers;
use \Controller;

class RegisterController extends Controller {

	public $detailsEntered = true;
	public $registerSuccessful = false;
	public $inputsTooShort = false;
	public $alphanumeric = true;
	public $userExists;

	public $emailValid = true;

	public $message = '';

    public function doInit() {
		// Username and password not entered
		if( !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email'])
		    || strlen($_POST['username']) === 0 || strlen($_POST['password']) === 0
		    || strlen($_POST['email']) === 0) {
			$this->detailsEntered = false;
		}
		else if (strlen($_POST['username']) < 7) {
			$this->inputsTooShort = true;
		}
		else if (!ctype_alnum($_POST['username'])) {
			$this->alphanumeric = false;
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$this->emailValid = false;
		}
		else {
			$username = $this->con->real_escape_string($_POST['username']);
			$password = md5($this->con->real_escape_string($_POST['password']));
			$email = $this->con->real_escape_string($_POST['email']);
		 
			$checkUsername = $this->con->query("SELECT * FROM users WHERE username = '$username'");
			
			$this->userExists = mysqli_num_rows($checkUsername) !== 0;
			
			if (!$this->userExists) {
				$this->registerSuccessful = $this->con->query("INSERT INTO users (username, timestamp_in_seconds, password, email_address) VALUES('$username',".time()." , '$password', '$email')");
			}
		}
    }
}
