<?php
	include ("../model/API.php");
	error_reporting (0); //Turn Off PHP Error Reporting

	$Sushi = new stdClass ();
	$Sushi -> id = mysqli_real_escape_string ($conn, $_POST ['id']);
	$Sushi -> name = mysqli_real_escape_string ($conn, $_POST ['name']);
	$Sushi -> description = mysqli_real_escape_string ($conn, $_POST ['description']);
	$Sushi -> price = mysqli_real_escape_string ($conn, $_POST ['price']);
	$Sushi->image = $_POST['current_image'];

	if (!empty ($_FILES ['image'] ['name'])) 
	{
		$targetDir = "../image/";
		$fileName = time () . "_" . basename ($_FILES ["image"] ["name"]);
		$targetFile = $targetDir . $fileName;
		move_uploaded_file ($_FILES ["image"] ["tmp_name"], $targetFile);
		$Sushi->image = $fileName;
	}

	$txt = json_encode ($Sushi);
	$res = updateSushi ($txt);
	echo '<script>window.location="../view/Change.php";</script>';
?>
