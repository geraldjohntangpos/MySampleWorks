<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'peopledb';
	$conn = new mysqli($host, $user, $pass, $dbname);
	
	//Declare the variables to be inputed to the database.
	$id = $_POST['id'];
	$famname = filter_var(ucwords(strtolower($_POST['famname'])), FILTER_SANITIZE_STRING);
	$firname = filter_var(ucwords(strtolower($_POST['firname'])), FILTER_SANITIZE_STRING);
	$course = $_POST['course'];
	$year = $_POST['year'];
	$email = $_POST['email']. '@' .$_POST['address'];
	$number = $_POST['mobile'];
	$mobile = '+63' .$number;
	$home = filter_var(ucwords(strtolower($_POST['home'])), FILTER_SANITIZE_STRING);
	$message = '';

	if(isset($_POST['Update'])) {
		if($id > 99999999 or $id < 10000000 or $number > 9999999999 or $number < 9000000000) {
			if($id > 99999999) {
				$message .= 'Wrong Student ID input. Must exceed 8 digits.<br />';
				$id = '';
				echo '<style type = "text/css">';
					echo '#idno {
						border: 3px solid orange;
					}';
				echo '</style>';
			}
			else if($id < 10000000) {
				$message .= 'Wrong Student ID input. Must not less 8 digits.<br />';
				$id = '';
				echo '<style type = "text/css">';
					echo '#idno {
						border: 3px solid orange;
					}';
				echo '</style>';
			}
			if($number > 9999999999) {
				$message .= 'Wrong Mobile Number input. Must exceed 10 digits and must start with 9.';
				$mobile = '';
				echo '<style type = "text/css">';
					echo '#mobile {
						border: 3px solid orange;
					}';
				echo '</style>';
			}
			else if($number < 9000000000) {
				$message .= 'Wrong Mobile Number input. Must not be less than 10 digits and must start with 9.';
				$mobile = '';
				echo '<style type = "text/css">';
					echo '#mobile {
						border: 3px solid orange;
					}';
				echo '</style>';
			}
			$emailaddress = $email;
			$email  = strstr($emailaddress, '@', true);
			$address = str_replace($email, "", $emailaddress);
			$mobilenumber = $mobile;
			$mobile = str_replace("+63", "", $mobilenumber);
			include 'search.php';
			echo '<table width = "100%">';
				echo '<tr width = "100%">';
				echo '<td width = "10%"></td>';
				echo '<td width = "80%"><div class = "warning">' .$message. '</div></td>';
				echo '<td width = "10%"></td>';
				echo '</tr>';
			echo '</table>';
			include 'buttons.php';
			die ('');
		}
		else {
			$sql = "UPDATE students SET Family_Name = '" .$famname. "', First_Name = '" .$firname. "', Course = '" .$course. "', Year_Level = '" .$year. "', Email_Address = '" .$email. "', Mobile_Number = '" .$mobile. "', Home_Address = '" .$home. "' WHERE Student_ID = '" .$id. "'";
			if ($conn->query($sql) === TRUE) {
				echo '<div class = "success">Student with Student ID of ' .$id. ' was UPDATED successfully</div>';
				include '../add/result.php';
				die('');
			} else {
				echo '<div class = "warning">Student with Student ID of ' .$id. ' was unable to be UPDATED. ' .$conn->error. '</div>';
				include '../add/result.php';
				die('');
			}
		}
	}
	else {
		$sql = "DELETE FROM students WHERE Student_ID = '" .$id. "'";
		if($conn->query($sql) === TRUE ) {
			echo '<div class = "success">Student with Student ID of ' .$id. ' was DELETED successfully</div>';
			include '../add/result.php';
			die('');
		}
		else {
			echo '<div class = "warning">Student with Student ID of ' .$id. ' was unable to be DELETED. ' .$conn->error. '</div>';
			include '../add/result.php';
			die('');
		}
	}
?>