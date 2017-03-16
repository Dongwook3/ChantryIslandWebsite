<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once("connect.php");
	
	if(isset($_GET['srch'])) {
		$srch = $_GET['srch'];
		$photoQuery = "SELECT gallery_title FROM tbl_gallery WHERE gallery_title LIKE '$srch%' ORDER BY gallery_title ASC";
		$getPhotos = mysqli_query($link, $photoQuery);
	}else {
		$movieQuery = "SELECT gallery_id, gallery_title, gallery_thumb, gallery_date FROM tbl_gallery ORDER BY gallery_title ASC";
		$getMovies = mysqli_query($link, $photoQuery);
    }

	$jsonResult = "[";
	while($picResult = mysqli_fetch_assoc($getPhotos)) {
		$jsonResult .= json_encode($picResult).",";
	}
	$jsonResult .= "]";
	//$jsonResult = substr_replace(string, replacement, start, length);
	$jsonResult = substr_replace($jsonResult,"",-2,1);
	echo $jsonResult;
?>