<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<title></title>
	<link rel="stylesheet" type="text/css" href="../css/styleSheet.css" />
</head>
<body>
<?php
	echo "<a name=".$c."></a>"
?>
<div id="commentCont">
	<div id="del">
	<?php
		echo "<a href=iframe.php?action=del&id=".$id.">X</a>";
	?>
	</div>
	
		
<?php
echo '<span id="name">'.$disp_name.':</span><br /><span id="commentText">'.$disp_comment.'</span>';
?>
	<div id="when">
<hr id="hr">
		<table>
			<tr>
			<td id="posted">
			Posted on:
			</td>
			<td id="date">
			<?php require 'when.php'; ?>
			</td>
			</tr>
		</table>
	</div>
</div>
<div id="space"></div>
</body>
</html>
