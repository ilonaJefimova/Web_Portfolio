<?php
	// Connect to database
	error_reporting (0);
	include ("../model/connection.php");

	$conn =  getDatabaseConnection ();

	function createMessage ($txt) 
	{
		global $conn;
		$data = json_decode ($txt);
		$message = $data -> message;
		$dttm = $data -> dttm ;

		$sql = "INSERT INTO electricimp (dttm , message) VALUES (?, ?)";
		$stmt = mysqli_stmt_init ($conn);
		$r1 = mysqli_stmt_prepare ($stmt, $sql);
		$r2 = mysqli_stmt_bind_param ($stmt, 'ss', $dttm , $message);
		$result = mysqli_stmt_execute ($stmt);
		$recordid = mysqli_stmt_insert_id ($stmt);

		mysqli_close ($stmt);
		mysqli_close ($conn);
		return $recordid;
	}  // return the new record number

	function createMessageLed ($txt) 
	{
		global $conn;
		$data = json_decode ($txt);
		$message = $data -> message;

		$sql = "INSERT INTO electricimpLed (message) VALUES (?)";

		$stmt = mysqli_stmt_init ($conn);
		$r1 = mysqli_stmt_prepare ($stmt, $sql);
		$r2 = mysqli_stmt_bind_param ($stmt, 's',  $message);
		$result = mysqli_stmt_execute ($stmt);
		$recordid = mysqli_stmt_insert_id ($stmt);

		mysqli_close ($stmt);
		mysqli_close ($conn);
		return $recordid;
	}  // return the new record number

	// Function to retrieve data for all sushi
	function getDataCurrentLed ()
	{
		global $conn;
		$sql = "SELECT * FROM  electricimpLed GROUP BY id DESC Limit 1";
		$result = mysqli_query ($conn, $sql);
		//  convert to JSON
		$rows = array ();
		while ($r = mysqli_fetch_assoc ($result)) 
		{
			$rows [] = $r;
		}
		return json_encode ($rows);
		mysqli_close ($conn);
	}

	// Function to retrieve data for all sushi
	function getDataCurrent ()
	{
		global $conn;
		$sql = "SELECT * FROM  electricimp GROUP BY id DESC Limit 1";
		$result = mysqli_query ($conn, $sql);
		//  convert to JSON
		$rows = array ();
		while ($r = mysqli_fetch_assoc ($result)) 
		{
			$rows [] = $r;
		}
		return json_encode ($rows);
		mysqli_close ($conn);
	}

	// Function to retrieve data for all sushi
	function getData ()
	{
		global $conn;
		$sql = "SELECT * FROM  electricimp GROUP BY id DESC Limit 10";
		$result = mysqli_query ($conn, $sql);
		//  convert to JSON
		$rows = array ();
		while ($r = mysqli_fetch_assoc ($result)) 
		{
			$rows [] = $r;
		}
		return json_encode ($rows);
		mysqli_close ($conn);
	}

	// Function to retrieve data for all sushi
	function getDataGraph ()
	{
		global $conn;
		$sql = "SELECT * FROM  electricimp GROUP BY id DESC Limit 144";
		$result = mysqli_query ($conn, $sql);
		//  convert to JSON
		$rows = array ();
		while ($r = mysqli_fetch_assoc ($result)) 
		{
			$rows [] = $r;
		}
		return json_encode ($rows);
		mysqli_close ($conn);
	}
?>
