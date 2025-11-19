<?php
	error_reporting (0); //Turn Off PHP Error Reporting
	function getDatabaseConnection () 
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "block3";
		$conn = mysqli_connect ($servername, $username, $password, $dbname);
		return $conn;
	}
?>
