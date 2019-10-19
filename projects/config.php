<?php 
		session_start();
		// connect to database
		$conn = mysqli_connect("localhost", "phpmyadmin", "ex04390eGiW9", "site_postings");

		if (!$conn) {
			die("Error connecting to database: " . mysqli_connect_error());
		}
		// define global constants
		define ('ROOT_PATH', realpath(dirname(__FILE__)));
		define('BASE_URL', 'http://localhost/projects/');
?>