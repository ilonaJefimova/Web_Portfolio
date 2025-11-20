<?php
	function getDatabaseConnection () 
	{
		//  Database connections 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "block4";
		$conn = mysqli_connect ($servername, $username, $password, $dbname);
		return $conn;
	}
?>