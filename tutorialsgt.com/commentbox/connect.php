<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'comments';
$error ='Could not connect.';
$conn = new mysqli($host, $user, $pass, $db);

if(!$conn){
	die('Error connecting to the Database.');
}
?>