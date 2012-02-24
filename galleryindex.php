<?php

	$page_id = $_GET['id'];
	
	if(strpos($page_id, ".."))
	{
		die("Bad Page Request");
	}
	if(!isset($page_id))
	{
		include("galleryhead.php");
		include("gallerymain.php");
		include("galleryfoot.php");		
	}
	else{
	//This gets the source of the image!
	$image_file = "http://www.chittibabaji.org/gallery/" . $page_id . "_jpg.jpg";
	//This creates a <img> tag!
	$content = "<img src=\"". $image_file . "\" " . "border=\"1\" />";
	{
	if(!isset($content))
	{
	header("Location: {$_SERVER['PHP_SELF']}");
	exit();
	}
	}
	include("galleryhead.php");
	include("galleryimage.php");
	include("galleryfoot.php");
	}


?>