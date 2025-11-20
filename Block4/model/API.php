<?php
	// Connect to database
	include ("../model/connection.php");
	error_reporting (0); //Turn Off PHP Error Reporting

	$conn =  getDatabaseConnection ();

	function authenticate ($username, $password) // function check username and password
	{
		global $conn; // assume the connection is created elsewhere
		$sql = "SELECT username, password FROM User WHERE username = ?";
		$stmt = mysqli_prepare ($conn, $sql);
		mysqli_stmt_bind_param ($stmt, 's', $username);
		mysqli_stmt_execute ($stmt);

		$result = mysqli_stmt_get_result ($stmt);
		$row = mysqli_fetch_assoc ($result);

		if ($row > 0) 
		{
			if (password_verify ($password, $row ['password'])) 
			{
				return $row ['username'];
			} 
		}

		return 0;
	}
?>
