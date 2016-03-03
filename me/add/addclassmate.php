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
		echo '<div class = "warning">' .$message. '</div>';
		include 'buttons_wrong_input.php';
		die ('');
	}
	else {
		$sql = "SELECT * FROM students WHERE Student_ID = '" .$id. "'";
		$retval = mysqli_query($conn, $sql);
		if(mysqli_fetch_array($retval, MYSQLI_ASSOC) != null) {
			$id = '';
			$emailaddress = $email;
			$email  = strstr($emailaddress, '@', true);
			$address = str_replace($email, "", $emailaddress);
			$mobilenumber = $mobile;
			$mobile = str_replace("+63", "", $mobilenumber);
			echo '<div class = "warning">Student ID ' .$id. ' already exist.</div>';
			include 'buttons_wrong_input.php';
			die('');
		} else {
			if(!$conn) {
				die ('Could not connect to the database!');
			} else {
				$sqlIns = "INSERT INTO students (Student_ID, Family_Name, First_Name, Course, Year_Level, Email_Address, Mobile_Number, Home_Address)
										  VALUES('$id', '$famname', '$firname', '$course', '$year', '$email', '$mobile', '$home')";
				if(mysqli_query($conn, $sqlIns)) {
					echo '<div class = "success">Student with Student ID of ' .$id. ' was ADDED successfully</div>';
					include '../add/result.php';
					die('');
				} else {
				echo '<div class = "warnin">Failed to add data.' .$conn->error. '</div>';
				include '../add/result.php';
				die('');
				}

			}
		}
	}
	$conn->close();
?>