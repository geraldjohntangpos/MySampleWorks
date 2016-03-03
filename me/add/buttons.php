<link rel = "Stylesheet" type = "css/text" href = "../css/style.css">
<style type = "text/css">
	#side {
		width: 10%;
	}
	
	#center {
		width: 80;
	}
</style>
<table width = "100%">
	<tr>
		<td id = "side"></td>
		<td id = "center">
			<form action = "addclassmate.php" method = "post">
				<table width = "100%" column = "4">
					<tr width = "100%">
						<td width =  "30%">
							<div id = "label">
								ID Number:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "number" class = "text" name = "id" placeholder = "ID Number" required autofocus>
						</td>
					</tr>
					<tr width = "100%">
						<td width =  "30%">
							<div id = "label">
								Family Name:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "text" class = "text" name = "famname" placeholder = "Family Name" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width =  "30%">
							<div id = "label">
								First Name:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "text" class = "text" name = "firname" placeholder = "First Name" required>
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
								<option>ACT</option>
								<option>BSIT</option>
								<option>BSHRM</option>
								<option>BSCoE</option>
								<option>BSCE</option>
								<option>BSBA</option>
								<option>BEED</option>
								<option>BSN</option>
							</select>
						</td>
						<td width = "10%">
							<div id = "label">
								Year: 
							</div>
						</td>
						<td id = "drop_td">
							<select name = "year" id = "drop">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
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
							<input type = "text" name = "email" class = "text" maxlength = "31" placeholder = "Email" required>
						</td>
						<td width = "10%">
							<div id = "label" style = "text-align: center">
								@
							</div>
						</td>
						<td width = "30%">
							<select name = "address" id = "drop">
								<option>yahoo.com</option>
								<option>gmail.com</option>
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
							<input type = "number" name = "mobile" class = "text" placeholder = "Mobile ex. (9xxxxxxxxx)" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "30%">
							<div id = "label">
								Home:
							</div>
						</td>
						<td width = "70%" colspan = "3">
							<input type = "text" name = "home" class = "text" placeholder = "Home Address" required>
						</td>
					</tr>
					<tr width = "100%">
						<td width = "100%" colspan = "4" height = "31px"></td>
					</tr>
					<tr width = "100%">
						<td width = "100%" colspan = "4">
							<input type = "submit" value = "Add Student" id = "sub">
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