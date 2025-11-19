<?php
	session_start ();
	error_reporting (0); //Turn Off PHP Error Reporting
	// Set up the JSON first
	$data = new stdClass ();
	$data -> vendor = "1234567";
	$data -> transaction = "GL123456";  // string of length 8
	$data -> amount = $_POST ['price']; // amount less than 100
	$data -> card = $_POST ['card']; //  16 digit number

	$request = json_encode ($data);

	$url = "https://somelink.com/~secretnumber/ourpay/" ;
	$ch = curl_init ();
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_HTTPHEADER, array(
    			'Content-Type: application/json',
    			'Content-Length: ' . strlen ($request)) );
	curl_setopt ($ch, CURLOPT_POST, true);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $request);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec ($ch);

	unset ($_SESSION ["username"]);
	setcookie ('cart_items_cookie','',time ()-2592000,'/');

	$_SESSION ["success_message"] = "Payment is completed. The transaction  " . $response. "";
	header('location:../view/order_process.php');
?>
