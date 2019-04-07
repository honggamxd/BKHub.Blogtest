<?php 
	session_start();
	
	$conn = mysqli_connect("localhost", "root" , "123456", "blog");
	if(!$conn) {
		 die('Error connecting to database');
		 }
	
	define ('ROOT_PATH', realpath(dirname(__FILE__)
		));
	define('BASE_URL', 'http://localhost/test1/');

?>