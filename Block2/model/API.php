<?php
	// Connect to database
	include ("../model/connection.php");
	error_reporting (0); //Turn Off PHP Error Reporting

	$conn =  getDatabaseConnection ();

	function authenticate ($username, $password) // function check username and password
	{
		global $conn;// assume the connection is created elsewhere
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

	//  Function to retrieve data for all sushi
	function getAllSushi ()
	{
		global $conn;
		$sql = "SELECT * FROM Sushi";
    	$result = mysqli_query ($conn, $sql);

    	$rows = [];
    	while ($r = mysqli_fetch_assoc ($result)) 
		{
        	$rows [] = $r;
    	}
    	return json_encode ($rows);
	}

	function createUser ($txt) 
	{
		global $conn;
		$data = json_decode ($txt);
		$Name = $data->Name;
		$Surname = $data->Surname;
		$username = $data->username;
		$password = $data->password;

		if (strlen ($password) <= 8) 
		{
			return ['success' => false, 'message' => 'Password must be longer than 8 characters.'];
		}

		// Check if username already exists
		$sql = "SELECT username FROM User WHERE username = ?";
		$stmt = mysqli_prepare ($conn, $sql);
		mysqli_stmt_bind_param ($stmt, 's', $username);
		mysqli_stmt_execute ($stmt);
		$result = mysqli_stmt_get_result ($stmt);

		if (mysqli_num_rows ($result) > 0) 
		{
			return ['success' => false, 'message' => 'Username already taken.'];
		}

		// Insert new user
		$hashed = password_hash ($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO User (Name, Surname, username, password) VALUES (?, ?, ?, ?)";
		$stmt = mysqli_prepare ($conn, $sql);
		mysqli_stmt_bind_param ($stmt, 'ssss', $Name, $Surname, $username, $hashed);
		mysqli_stmt_execute ($stmt);

		$id =  mysqli_insert_id ($conn);

		if ($id > 0) 
		{
			return ['success' => true, 'id' => $id];
		} 
		else 
		{
			return ['success' => false, 'message' => 'Database error. Please try again.'];
		}
	}

	// function to create a new national park
	function createSushi ($txt) 
	{
		global $conn;
		$data = json_decode ($txt);

		$sql = "INSERT INTO Sushi (name, description, price, image) VALUES (?, ?, ?, ?)";
		$stmt = mysqli_prepare ($conn, $sql);

		mysqli_stmt_bind_param (
			$stmt,
			'ssds',
			$data->name,
			$data->description,
			$data->price,
			$data->image
		);

		mysqli_stmt_execute ($stmt);

		return mysqli_insert_id ($conn);
	}

	// function to retrieve data for a single national park
	function deleteSushi ($id)
	{
		global $conn;
		$sql = "DELETE FROM Sushi WHERE id = ?";
		$stmt = mysqli_prepare ($conn, $sql);
		mysqli_stmt_bind_param ($stmt, 'i', $id);

		return mysqli_stmt_execute ($stmt);
	}


	// function to retrieve data for a single national park
	function getSushi ($id)
	{
		global $conn;
		$sql = "SELECT * FROM Sushi WHERE id = ? LIMIT 1";
		$stmt = mysqli_prepare ($conn, $sql);
		mysqli_stmt_bind_param ($stmt, 'i', $id);
		mysqli_stmt_execute ($stmt);

		$result = mysqli_stmt_get_result ($stmt);
		$row = mysqli_fetch_assoc ($result);

		return json_encode ($row);
	}


	// function to create a new national park
	function updateSushi ($txt)
	{
		global $conn;
		$data = json_decode ($txt);

		$sql = "UPDATE Sushi SET name = ?, description = ?, price = ?, image = ? WHERE id = ?";
		$stmt = mysqli_prepare ($conn, $sql);

		mysqli_stmt_bind_param (
			$stmt,
			'ssdsi',
			$data->name,
			$data->description,
			$data->price,
			$data->image,
			$data->id
		);

		return mysqli_stmt_execute ($stmt);
	}
?>
