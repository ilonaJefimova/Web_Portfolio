<?php
	include ("../model/API.php");
	error_reporting (0); //Turn Off PHP Error Reporting

	$id  =  mysqli_real_escape_string ($conn, $_GET ['id']);
	deleteSushi ($id);
	echo '<script>window.location="../view/Change.php";</script>';
?>
