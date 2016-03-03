<link rel = "Stylesheet" type = "css/text" href = "../css/style.css">
<style type = "text/css">
	#side {
		width: 10%;
	}
	
	#center {
		width: 80;
	}
	
</style>
<script type = "javascript">
	function setvalues(var course) {
		document.getElementById("course").selected = true;
	}
	
	function limitid() {
		var count = document.getElementById("idno").value;
		if(count > 9999999) {
			alert("ID number should not be more than 8 digits.");
		}
	}
	
	function limitmobile() {
		var count = document.getElementById("mobile").value;
		if(count > 999999999) {
			alert("Mobile numbers should not be more than 10 digits.");
		}
	}
</script>
<table width = "100%">
	<tr>
		<td id = "side"></td>
		<td id = "center">
			<form action = "runthis.php" method = "post">
				<table width = "100%" column = "4">
					<tr width = "100%">
						<td width =  "30%">
							<div id = "label">
								ID Number:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "number" class = "text" id = "idno" name = "id" onKeyUp = "limitid();" value = "<?php echo $id; ?>" placeholder = "ID Number" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width =  "30%">
							<div id = "label">
								Family Name:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "text" class = "text" name = "famname" value = "<?php echo $famname; ?>" placeholder = "Family Name" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width =  "30%">
							<div id = "label">
								First Name:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "text" class = "text" name = "firname" value = "<?php echo $firname; ?>" placeholder = "First Name" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "30%">
							<div id = "label">
								Course: 
							</div>
						</td>
						<td id = "drop_td">
							<select name = "course" id = "drop">
								<option id = "ACT" <?php if($course == 'ACT') echo 'selected'; ?> >ACT</option>
								<option id = "BSIT" <?php if($course == 'BSIT') echo 'selected'; ?> >BSIT</option>
								<option id = "BSHRM" <?php if($course == 'BSHRM') echo 'selected'; ?> >BSHRM</option>
								<option id = "BSCoE" <?php if($course == 'BSCoE') echo 'selected'; ?> >BSCoE</option>
								<option id = "BSCE" <?php if($course == 'BSCE') echo 'selected'; ?> >BSCE</option>
								<option id = "BSBA" <?php if($course == 'BSBA') echo 'selected'; ?> >BSBA</option>
								<option id = "BEED" <?php if($course == 'BEED') echo 'selected'; ?> >BEED</option>
								<option id = "BSN" <?php if($course == 'BSN') echo 'selected'; ?> >BSN</option>
							</select>
						</td>
						<td width = "10%">
							<div id = "label">
								Year: 
							</div>
						</td>
						<td id = "drop_td">
							<select name = "year" value = "<?php echo $year; ?>" id = "drop">
								<option <?php if($year == 1) echo 'selected'; ?> >1</option>
								<option <?php if($year == 2) echo 'selected'; ?> >2</option>
								<option <?php if($year == 3) echo 'selected'; ?> >3</option>
								<option <?php if($year == 4) echo 'selected'; ?> >4</option>
							</select>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "30%">
							<div id = "label">
								Email Address: 
							</div>
						</td>
						<td width = "30%">
							<input type = "text" name = "email" class = "text" maxlength = "31" value = "<?php echo $email; ?>" placeholder = "Email" required>
						</td>
						<td width = "10%">
							<div id = "label" style = "text-align: center">
								@
							</div>
						</td>
						<td width = "30%">
							<select name = "address" id = "drop">
								<option <?php if($address == '@yahoo.com') echo 'selected'; ?> >yahoo.com</option>
								<option <?php if($address == '@gmail.com') echo 'selected'; ?> >gmail.com</option>
							</select>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "30%">
							<div id = "label">
								Mobile: (+63)
							</div>
						</td>
						<td width = "70%" colspan =  "4">
							<input type = "number" name = "mobile" class = "text" value = "<?php echo $mobile; ?>" id = "mobile" placeholder = "Mobile ex. (9xxxxxxxxx)" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "30%">
							<div id = "label">
								Home:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "text" name = "home" class = "text" value = "<?php echo $home; ?>" placeholder = "Home Address" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "100%" colspan = "4" height = "31px"></td>
					</tr>
					<tr width = "100%">
						<td width = "100%" colspan = "2">
							<input type = "submit" value = "Update" id = "sub" name = "Update" style = "width: 300px;">
						</td>
						<td width = "100%" colspan = "2">
							<input type = "submit" value = "Delete" id = "sub" name = "Delete" style = "width: 300px;">
						</td>
					</tr>
				</table>
			</form>
		</td>
		<td id = "side"></td>
	</tr>
</table>

<?php
	
?>
