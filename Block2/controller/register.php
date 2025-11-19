<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
	include ("../model/API.php");
	error_reporting (0); //Turn Off PHP Error Reporting

	// Validate required fields
	if (empty ($_POST['Name']) || empty ($_POST ['Surname']) || empty ($_POST ['username']) || empty ($_POST ['password'])) 
	{
		die ("<script>
				Swal.fire({
					title: 'Registration Failed',
					text: 'All fields are required.',
					icon: 'error',
					confirmButtonText: 'Back'
				}).then(function() {
					window.location.href = '../view/Sushi.php';
				});
			</script>");
	}

	// Sanitize input
	$user = new stdClass ();
	$user -> Name = mysqli_real_escape_string ($conn, $_POST ['Name']);
	$user -> Surname = mysqli_real_escape_string ($conn, $_POST ['Surname']);
	$user -> username = mysqli_real_escape_string ($conn, $_POST ['username']);
	$user -> password = mysqli_real_escape_string ($conn, $_POST ['password']);

	$json = json_encode ($user);
	$response  = createUser ($json);

	if ($response ['success'])
	{
		echo "<script>
				Swal.fire({
					title: 'Registration Successful!',
					text: 'Your user ID is {$response['id']}',
					icon: 'success',
					confirmButtonText: 'Go to Sushi Shop'
				}).then(function() {
					window.location.href = '../view/Sushi.php';
				});
				</script>";
	}
	else
	{
		echo "<script>
				Swal.fire({
					title: 'Registration Failed',
					text: '{$response['message']}',
					icon: 'error',
					confirmButtonText: 'Back'
				}).then(function() {
					window.location.href = '../view/Sushi.php';
				});
				</script>";
	}
?>
</body>
</html>