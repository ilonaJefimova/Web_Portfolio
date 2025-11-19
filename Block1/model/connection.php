<?php
	function getDatabaseConnection ()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "block1";
		$conn = mysqli_connect ($servername, $username, $password, $dbname);
		return $conn;
	}
?>