<?php

	error_reporting (0);

	// Library of methods to support the Web Service

	//  function to convert a single record from database to XML
	function convertToXML ($query) 
	{
		$txt = '<news>';
		$txt .= '<id>'.htmlspecialchars ($query ["id"]).'</id>';
		$txt .= '<title>'.htmlspecialchars ($query ["title"]).'</title>';
		$txt .= '<description>'.htmlspecialchars ($query ["description"]).'</description>';
		$txt .= '<image>'.htmlspecialchars ($query ["image"]).'</image>';
		$txt .= '<link>'.htmlspecialchars ($query ["link"]).'</link>';
		$txt .= '</news>';
		return $txt;
	}

	// function to get all (max 12) news
	function getAllNews ()
	{
		global $conn;
		$query = "select * from news order by id desc";
		$result = mysqli_query ($conn, $query);
		$txt = '<allnews>';
		while ($row = mysqli_fetch_array ($result))
		{
			$txt = $txt.convertToXML ($row);
		}
		$txt .= '</allnews>';
		return $txt;
	}

	//  function to get a specific news
	function getNews ($id)
	{
		global $conn;
		$stmt = $conn -> prepare ("SELECT * FROM news WHERE id = ?");
		$id = (int) $id;
		$stmt -> bind_param ("i", $id);
		$stmt -> execute ();
		$result = $stmt -> get_result ();
		$response = $result -> fetch_assoc ();
		$stmt -> close ();
		$txt = convertToXML ($response);
		return $txt;
	}

	//  function to insert a single news
	function insertNews ($xml)
	{
		global $conn;
		$data = simplexml_load_string ($xml);
		$title = $data -> title;
		$description = $data -> description;
		$image = $data -> image;
		$link = $data -> link;

		$stmt = $conn -> prepare ("INSERT INTO news (title, description, image, link) VALUES (?, ?, ?, ?)");
		$stmt -> bind_param ("ssss", $title, $description, $image, $link);
		$result = $stmt -> execute ();
		$stmt -> close ();
		return $result ? 1 : 0;
	}

	//  function to update a specific news
	function updateNews ($id, $xml)
	{
		global $conn;
		$data = simplexml_load_string ($xml);
		$id = (int) $id;
		$title = $data -> title;
		$description = $data -> description;
		$image = $data -> image;
		$link = $data -> link;

		$stmt = $conn -> prepare ("UPDATE news SET title=?, description=?, image=?, link=? WHERE id=?");
		$stmt -> bind_param ("ssssi", $title, $description, $image, $link, $id);
		$result = $stmt -> execute ();
		$stmt -> close ();
		return $result ? 1 : 0;
	}

	//  function to delete a specific news
	function deleteNews ($id)
	{
		global $conn;
		$stmt = $conn -> prepare ("DELETE FROM news WHERE id = ?");
		$id = (int) $id;
		$stmt -> bind_param ("i", $id);
		$result = $stmt -> execute ();
		$stmt -> close ();
		return $result ? 1 : 0;
	}

?>
