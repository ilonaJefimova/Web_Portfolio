<?php
	// Connect to database
	error_reporting (0);
	include ("../model/connection.php");

	$conn = getDatabaseConnection ();
	
	// Function to retrieve data for all avengers and images display by avenger id in ascending order.
	function getAllAvengers ()
	{
		global $conn;
		$sql = "SELECT avenger.*, avenger_image.image 
				FROM avenger 
				JOIN avenger_image ON avenger.id = avenger_image.id 
				GROUP BY avenger.id 
				ORDER BY avenger.id ASC";

		$result = mysqli_query ($conn, $sql);
		// convert to JSON
		$rows = [];
		while ($r = mysqli_fetch_assoc ($result)) 
		{
    		$rows [] = $r;
		}
		return json_encode ($rows);
	}
	
	//  function to retrieve all images for single avenger
	function getAllImg ($id)
	{
		global $conn;

		$id = intval ($id);
		$sql = "SELECT * FROM avenger 
				JOIN avenger_image 
				ON avenger.id = avenger_image.id 
				WHERE avenger.id = $id";
		
		$result = mysqli_query ($conn, $sql);
		$rows = array ();
		if (mysqli_num_rows ($result) > 0)
		{
			//  convert to JSON
			while ($r = mysqli_fetch_assoc ($result)) 
			{
				$rows [] = $r;
			}
		}
		else
		{ 
			echo " At this moment no added images ";
		}
		return json_encode ($rows);
	}
	
	//  function to retrieve avenger data for a single avenger
	function getAvengers ($id) 
	{
		global $conn;
		$id = intval ($id);
		$sql = "SELECT * FROM avenger 
				JOIN avenger_image 
				ON avenger.id = avenger_image.id 
				WHERE avenger.id = $id";

		$result = mysqli_query ($conn, $sql);
		$row = mysqli_fetch_array ($result) ;  //there is only 1 row 
		return json_encode ($row); 
	}
	
	
	//  function to retrieve article id information for a single avenger in the publication table
	function getArticles ($id) 
	{
		global $conn;
		$id = intval ($id);
		$sql = "SELECT avenger_article.* 
				FROM avenger_article 
				JOIN avenger_publication ON avenger_article.AID = avenger_publication.AID 
				WHERE avenger_publication.id = $id";
		
		$result = mysqli_query ($conn, $sql);
		$rows = array ();
		if (mysqli_num_rows ($result) > 0)
		{
			//  convert to JSON
			while ($row = mysqli_fetch_array ($result)) 
			{
				$rows [] = $row;
			}
		}
		else
		{ 
			echo " At this moment no added articles ";
		}
		mysqli_close ($conn);
		return json_encode ($rows);
	}
	
	//  function to retrieve all article information for a single avenger
	function getArticle ($id) 
	{
		global $conn;
		$id = intval ($id);

			$sql = "SELECT * FROM avenger 
					JOIN avenger_publication ON avenger.id = avenger_publication.id
					JOIN avenger_article ON avenger_article.AID = avenger_publication.AID
					JOIN avenger_image ON avenger_article.IID = avenger_image.IID
					JOIN avenger_reporter ON avenger_article.RID = avenger_reporter.RID
					WHERE avenger_article.AID = $id";

		$result = mysqli_query ($conn, $sql);

		if ($row = mysqli_fetch_assoc ($result)) 
		{
			return json_encode ($row);
		}
		return json_encode (null);
	}

?>