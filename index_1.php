<?php

	$page_id = $_GET['id'];
	if(strpos($page_id, "..") || (!isset($page_id)))
	{
		$page_name = "main";
		$title = "Sadguru Chittibabaji";
	}
	else
	{
	$case = (int)$page_id;
	switch($case)
	{
		case 1: $page_name = "bio";
				$title = "Bio: Sadguru Chittibabaji";
				 break;
		case 2: $page_name = "babu";
				$title = "Babu: Sadguru Chittibabaji";
				 break;
		case 3: $page_name = "mystic";
				$title = "Mysticism: Sadguru Chittibabaji";
				 break;
		case 4: $page_name = "practice";
				$title = "Practice: Sadguru Chittibabaji";
				 break;
		case 5: $page_name = "process";
				$title = "Process: Sadguru Chittibabaji";
				 break;
		case 6: $page_name = "samsthanam";
				$title = "Samsthanam: Sadguru Chittibabaji";
				 break;
		case 7: $page_name = "howtoreach";
				$title = "Reaching the Abode...: Sadguru Chittibabaji";
				 break;
		case 8: $page_name = "contact";
				$title = "Contact Us: Sadguru Chittibabaji";
				 break;
		default: $page_name = "main";
				$title = "Sadguru Chittibabaji";
				 break;
	}
	}
	
	$content_file = $_SERVER['DOCUMENT_ROOT']. "/".$page_name . ".php";
	if(!file_exists($content_file))
	{
	include("header.php");
	include("main.php");
	include("footer.php");
	}
	else{
	include("header.php");
	include($content_file);
	include("footer.php");
	}
?>