<link rel = "Stylesheet" type = "text/css" href = "../css/style.css">

<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'peopledb';
	$conn = new mysqli($host, $user, $pass, $dbname);
	$count = 0;
	echo '<table id = "table_display" cellspacing = "0px" cellpadding = "0px">';
		echo '<tr>';
			echo '<td id = "center_text">';
				echo 'Student ID';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Family Name';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'First Name';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Course';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Year Level';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Email Address';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Mobile Number';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Home Address';
			echo '</td>';
		echo '</tr>';
	
			if (!$conn) {
				die('Could not retreive database');
			} else {
				$sqlSel = "SELECT * FROM students";
				$retval = mysqli_query($conn, $sqlSel);
				$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
				 do {
					$id = $row['Student_ID'];
					$famname = $row['Family_Name'];
					$firname = $row['First_Name'];
					$course = $row['Course'];
					$year = $row['Year_Level'];
					$email = $row['Email_Address'];
					$mobile = $row['Mobile_Number'];
					$home = $row['Home_Address'];
					
					echo '<tr>';
						echo '<td id = "center_text_td">';
							echo $id;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $famname;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $firname;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $course;
						echo '</td>';
						echo '<td id = "center_text_td">';
							echo $year;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $email;
						echo '</td>';
						echo '<td id = "center_text_td">';
							echo $mobile;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $home;
						echo '</td>';
					echo '</tr>';
					$count++;
				} while($row = mysqli_fetch_array($retval, MYSQL_ASSOC));
			}
			echo '<tr width = 100%>';
				echo '<td id = "foot" colspan = "8">';
					echo 'Total Students = ' .$count;
				echo '</td>';
			echo '</tr>';
			echo '</table>';
?>