<?php
	include ("../model/API.php");
	error_reporting (0); //Turn Off PHP Error Reporting

	$sushi = new stdClass ();
	$sushi -> name =  mysqli_real_escape_string ($conn, $_POST ['name']);
	$sushi -> description =  mysqli_real_escape_string ($conn, $_POST ['description']);
	$sushi -> price =  mysqli_real_escape_string ($conn, $_POST ['price']);

	if (!empty ($_FILES ['image'] ['name'])) 
	{
		$targetDir = "../image/";
		$fileName = time () . "_" . basename ($_FILES ["image"] ["name"]);
		$targetFile = $targetDir . $fileName;
		move_uploaded_file ($_FILES ["image"] ["tmp_name"], $targetFile);
		$sushi->image = $fileName;
	} 
	else 
	{
		$sushi->image = "coming_soon.png";
	}

	$json = json_encode ($sushi);
	$recnum = createSushi ($json);

	echo '<script>window.location="../view/Change.php";</script>';
?>
