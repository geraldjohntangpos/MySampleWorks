<link rel = "Stylesheet" type = "text/css" href = "../css/style.css">

<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "peopledb";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	$id = $_GET['id'];

	$sql = "SELECT * FROM students WHERE Student_ID = '" .$id. "'";
	$retval = mysqli_query($conn, $sql);
	if(mysqli_fetch_array($retval, MYSQLI_ASSOC) == null) {
		include 'search.php';
		echo '<table width = "100%">';
			echo '<tr width = "100%">';
			echo '<td width = "10%"></td>';
			echo '<td width = "80%" class = "warning" colspan = "2">Student ID ' .$id. ' not found.</td>';
			echo '<td width = "10%"></td>';
			echo '</tr>';
		echo '</table>';
		die('');
	} else {
		$retval = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
		do {
			$id = $row['Student_ID'];
			$famname = $row['Family_Name'];
			$firname = $row['First_Name'];
			$course = $row['Course'];
			$year = $row['Year_Level'];
			$emailaddress = $row['Email_Address'];
			$email  = strstr($emailaddress, '@', true);
			$address = str_replace($email, "", $emailaddress);
			$mobilenumber = $row['Mobile_Number'];
			$mobile = str_replace("+63", "", $mobilenumber);
			$home = $row['Home_Address'];
		}while($row = mysqli_fetch_array($retval, MYSQL_ASSOC));
					
		include 'search.php';
		include 'buttons.php';
		echo '<script type = "javascript">';
			echo 'setvalues(' .$course. ')';
		echo '</script>';
	}
	
	$conn->close();
?>
