<?php
	if(@$_REQUEST['action']=="del"){
		$query = "DELETE FROM comments WHERE id=".($_REQUEST['id']);
		if(mysqli_query($conn, $query)) {
			header('Location: iframe.php#comments');
		}
	}
	else {
		$sql = "SELECT * FROM comments";
		$retval = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
		$c = 0;
		if($row != null) {
			do {
			$id = $row['id'];
			$disp_name = $row['name'];
			$disp_comment = $row['comment'];
			$disp_post_time = $row['post_time'];
			
			include 'div.inc.php';
			} while($row = mysqli_fetch_array($retval, MYSQL_ASSOC));
		}
		else {
			echo 'No comments yet.';
		}
	}
?>
