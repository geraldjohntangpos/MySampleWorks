<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<title></title>
</head>
<body>
<?php
$c=1;
$error ='Could not connect.';
	$query = "SELECT * FROM comments ORDER BY id ASC;";
		$retval = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
		if($row==null){
			echo 'No comment yet.';
		}
		else {
			do {
				$disp_name = $row['name'];
				$disp_comment = $row['comment'];
				$disp_post_time = $row['post_time'];
				$id = $row['id'];
				$c++;
				include "div.inc.php";
			} while($row = mysqli_fetch_array($retval, MYSQL_ASSOC));
		}
?>
</body>
</html>