<?php
	include ("location.php");

	// Prepare XML data from POST
	$title = isset ($_POST ['title']) ? $_POST ['title'] : '';
	$description = isset ($_POST ['description']) ? $_POST ['description'] : '';
	$link = isset ($_POST ['link']) ? $_POST ['link'] : '';
	$image = 'coming_soon.png'; // default

	if (!$title || !$description || !$link) 
	{
		echo json_encode (['success' => false, 'message' => 'All fields are required.']);
		exit;
	}

	$data = '<news>';
	$data .= '<title>' . htmlspecialchars ($title) . '</title>';
	$data .= '<description>' . htmlspecialchars ($description) . '</description>';
	$data .= '<image>' . htmlspecialchars ($image) . '</image>';
	$data .= '<link>' . htmlspecialchars ($link) . '</link>';
	$data .= '</news>';

	$curl = curl_init ($location);
	curl_setopt ($curl, CURLOPT_CUSTOMREQUEST, "POST");
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
		echo json_encode (['success' => true, 'message' => 'New record was successfully created.']);
	} 
	else 
	{
		echo json_encode ([
			'success' => false,
			'message' => $error ?: 'Something went wrong, please try again.'
		]);
	}
?>
