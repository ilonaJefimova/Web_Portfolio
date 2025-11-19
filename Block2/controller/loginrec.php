<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
	include ( "../model/API.php") ;
	error_reporting (0); //Turn Off PHP Error Reporting

	$username = mysqli_real_escape_string ($conn, $_POST ['username']);
	$password = mysqli_real_escape_string ($conn, $_POST ['password']);

	$num = authenticate ($username, $password);

	if ($num) 
	{
		session_start ();
		$_SESSION ["username"] = $num;

		if ($num == 'SuperSecretA') 
		{
			echo "  <script>
					Swal.fire({
						title: 'Welcome Admin!',
						icon: 'success',
						confirmButtonText: 'Continue'
					}).then(function() {
						window.location.href = '../view/Change.php';
					});
					</script>";
		} 
		else 
		{
			echo "  <script>
					Swal.fire({
						title: 'Login Successful!',
						icon: 'success',
						confirmButtonText: 'Continue'
					}).then(function() {
						window.location.href = '../view/Sushi.php';
					});
					</script>";
		}
	} 
	else 
	{
		echo "  <script>
				Swal.fire({
					title: 'Login Failed',
					text: 'Incorrect username or password.',
					icon: 'error',
					confirmButtonText: 'Try Again'
				}).then(function() {
					window.location.href = '../view/Sushi.php';
				});
				</script>";
	}
?>
</body>
</html>