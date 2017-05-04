<?php

final class Base {

    public static $fqdn = null;
    //public static $fqdn = 'http://localhost/~richard/my_website';
    
    /*
    	Never allow editing when the website is in the public domain.
    */
    public static $editingAllowed = false;
    
    public static $con;

    public static function setup() {
        session_start();
    
    	/*
    		For security reasons, I have stripped out the login data for the database.
    	*/
    
        $dbhost = "???"; // this will ususally be 'localhost', but can sometimes differ
        $dbname = "???"; // the name of the database that you are going to use for this project
        $dbuser = "???"; // the username that you created, or were given, to access your database
        $dbpass = "???"; // the password that you created, or were given, to access your database

        $mysqli = mysqli_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysqli_error());
        $mysqli->select_db($dbname) or die("MySQL Error: " . mysqli_error());

        self::$con = $mysqli;
        self::$con->set_charset("utf8");
    }
}