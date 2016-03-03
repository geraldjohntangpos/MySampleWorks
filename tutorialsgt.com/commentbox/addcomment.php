<?php

	include 'connect.php';
	
	$name = $_GET['name'];
	$comment = $_GET['comment'];
	
	$sql = "INSERT INTO comments (name, comment, post_time) VALUES ('$name', '$comment', NOW())";
	
	if(mysqli_query($conn, $sql)){
		$redirect = true;
		header('Location: iframe.php');
	}
	else {
		die('Error adding comment.');
	}

?>