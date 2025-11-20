<?php
	$id = isset ($_GET ['id']) ? intval ($_GET ['id']) : 0;

	if ($id <= 0)
	{
		echo json_encode (['success' => false, 'message' => 'Invalid ID']);
		exit;
	}

	include ("location.php");

	// $url = $location . '/' . urlencode ($id);
	$url = $location . '?id=' . urlencode ($id); 

	$curl = curl_init ($url);
	curl_setopt ($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
	$resp = curl_exec ($curl);

	if ($resp == 1)
	{
		echo json_encode (['success' => true, 'message' => "News ID $id was successfully deleted."]);
		curl_close ($curl);
		exit;
	}

	echo json_encode (['success' => false, 'message' => 'Error: ' . curl_error ($curl)]);
	curl_close ($curl);
	
?>