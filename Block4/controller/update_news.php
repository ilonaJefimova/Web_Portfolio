<?php

	$id = isset ($_POST ['id']) ? intval ($_POST ['id']) : 0;
	if ($id <= 0) 
	{
		echo json_encode (['success' => false, 'message' => 'Invalid ID']);
		exit;
	}

	include ("location.php");
	// $url = $location . '/' . urlencode ($id);
	$url = $location . '?id=' . urlencode ($id); 

	$image = $_POST['current_image'];

	if (!empty ($_FILES ['image'] ['name'])) 
	{
		$targetDir = "../image/";
		$fileName = time () . "_" . basename ($_FILES ["image"] ["name"]);
		$targetFile = $targetDir . $fileName;
		move_uploaded_file ($_FILES ["image"] ["tmp_name"], $targetFile);
		$image = $fileName;
	}

	$data = '<news>';
	$data .= '<title>'.htmlspecialchars ($_POST ['title']).'</title>';
	$data .= '<description>'.htmlspecialchars ($_POST ['description']).'</description>';
	$data .= '<image>'.htmlspecialchars ($image).'</image>';
	$data .= '<link>'.htmlspecialchars ($_POST ['link']).'</link>';
	$data .= '</news>';

	$curl = curl_init ($url);
	curl_setopt ($curl, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt ($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: text/xml',
		'Content-Length: ' . strlen ($data)
	]);

	$resp = curl_exec ($curl);
	$error = curl_error ($curl);
	curl_close ($curl);

	if ($resp === '1') 
	{
		echo json_encode (['success' => true, 'message' => "News ID $id was successfully updated."]);
	} 
	else 
	{
		echo json_encode ([
			'success' => false,
			'message' => $error ?: 'Something went wrong, please try again.'
		]);
	}
?>