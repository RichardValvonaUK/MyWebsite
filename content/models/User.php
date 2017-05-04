<?php

class User extends \Model {
    
    public $id;
    public $timestampInSeconds;
    public $userName;
    public $password;
    public $emailAddress;
    public $isAdmin;
    public $verified;
    
    public $dbValues = array();
    
    private static $columns = array(
		'id', 'timestamp_in_seconds', 'username', 'password',
		'email_address', 'is_admin', 'verified'
    );
    
    private static function getDBValue($row, $key) {
		if (isset($row[$key])) return $row[$key];
		else return null;
	}
    
    
    
    private static function createUsersFromResult($queryResult) {
		$users = array();
		
		while ($row = $queryResult->fetch_assoc()) {
			$user = new User();
			$user->id = User::getDBValue($row, 'id');
			
			$user->timestampInSeconds = User::getDBValue($row, 'timestamp_in_seconds');
			$user->userName = User::getDBValue($row, 'username');
			$user->password = User::getDBValue($row, 'password');
			$user->emailAddress = User::getDBValue($row, 'email_address');
			$user->isAdmin = User::getDBValue($row, 'is_admin');
			$user->verified = User::getDBValue($row, 'verified');
			$user->mainImage = User::getDBValue($row, 'main_image');
			$user->mainImagePending = User::getDBValue($row, 'main_image_pending');
			$user->verificationImage = User::getDBValue($row, 'verification_image');
			$user->verificationImagePending = User::getDBValue($row, 'verification_image_pending');
			
			array_push($users, $user);
		}
		
		return $users;
	}
	
	private static function createUserFromResult($queryResult) {
		$users = User::createUsersFromResult($queryResult);
		
		return $users[0];
	}
    
    public static function getZZZ() { return 'ZZSS'; }
	
	public static function getLoggedIn() { return Session::$loggedIn; }
	
	public static function getLoggedInUser() {
		$userId_safe = \Base::$con->real_escape_string(Session::$userId);
		$query = 'SELECT ' . implode(',', User::$columns) . " FROM users WHERE id = $userId_safe";
		
		$result = \Base::$con->query($query);
		
		if ($result->num_rows === 1) {
			return User::createUserFromResult($result);
		}
		
		return null;
	}
	

}
