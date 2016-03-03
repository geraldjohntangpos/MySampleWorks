<link rel = "Stylesheet" type = "text/css" href = "../css/style.css">

<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'gerald';
	$conn = new mysqli($host, $user, $pass, $dbname);
	
	echo '<table id = "table_display" cellspacing = "0px" cellpadding = "0px">';
		echo '<tr>';
			echo '<td id = "center_text">';
				echo 'ID';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Last Name';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'First Name';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Middle Name';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Age';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Year';
			echo '</td>';
			echo '<td id = "center_text">';
				echo 'Date Added';
			echo '</td>';
		echo '</tr>';
	
			if (!$conn) {
				die('Could not retreive database');
			} else {
				$sqlSel = "SELECT * FROM classmates ORDER BY LNAME";
				$retval = mysqli_query($conn, $sqlSel);
				$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
				 do {
					$id = $row['ID'];
					$fname = $row['FNAME'];
					$lname = $row['LNAME'];
					$mname = $row['MNAME'];
					$age = $row['AGE'];
					$year = $row['YEAR'];
					$dateadded = $row['DATEADDED'];
					
					echo '<tr>';
						echo '<td id = "center_text_td">';
							echo $id;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $lname;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $fname;
						echo '</td>';
						echo '<td id = "normal_td">';
							echo $mname;
						echo '</td>';
						echo '<td id = "center_text_td">';
							echo $age;
						echo '</td>';
						echo '<td id = "center_text_td">';
							echo $year;
						echo '</td>';
						echo '<td id = "center_text_td">';
							echo $dateadded;
						echo '</td>';
					echo '</tr>';
					
				} while($row = mysqli_fetch_array($retval, MYSQL_ASSOC));
			}
			echo '</table>';
?>