<?php
ob_start();
$query = "SELECT * FROM commentphp";
$result = mysql_query($query);
$count = 0;
$redirect = false;
		while($row=mysql_fetch_array($result)){
		$count++;
		}
	if(@$_REQUEST['action']=="like"){
		mysql_query("INSERT INTO commentphp (comment) VALUES ('Yay! There's another like.');");
		$redirect = true;
	}
	if($redirect == true){
		header('Location: like.php');
	}
ob_end_flush();
?>