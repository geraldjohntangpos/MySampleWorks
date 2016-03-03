<!DOCTYPE>

<html>
	<head>
		<title>Students</title>
		<link rel = "Stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
		<table id = "main_frame" cellspacing = "0px" cellpadding = "0px">
			<tr>
				<td id = "side"></td>
				<td id = "center" class = "header">
					<table id = "nav">
						<tr width = "100%">
							<th><li><a href = "add/result.php" target = "display"><div>View</div></a></li></th>
							<th><li><a href = "search/search.php" target = "display"><div>Search</div></a></li></th>
							<th><li><a href = "add/buttons.php" target = "display"><div>Add</div></a></li></th>
						</tr>
					</table>
				</td>
				<td id = "side"></td>
			</tr>
			<tr>
				<td id = "side"></td>
				<td id = "center">
					<iframe class = "frame" id = "frame_container" src = "add/result.php" name = "display"></iframe>
				</td>
				<td id = "side"></td>
			</tr>
			<tr>
				<td id = "side"></td>
				<td id = "center"></td>
				<td id = "side"></td>
			</tr>
		</table>
	</body>
</html>