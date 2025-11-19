<?php
	error_reporting (0); //Turn Off PHP Error Reporting
	function getDatabaseConnection () 
	{
		// Database connections
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "block2";
		$conn = mysqli_connect ($servername, $username, $password, $dbname) ;
		return $conn ;
	}
?>
