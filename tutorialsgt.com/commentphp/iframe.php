<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="../css/styleSheet.css" />
	<style type="text/css">
		body {background:none;}
	</style>
</head>
<body style="background:white;">
<a name="comments"></a>
<div id="comment">
<div id="box" align="center">
	<?php
	$redirect = false;
	$warning = '*Please fill all the fields. Your input must not exceed 300 characters or else, the exceeding characters won\'t be displayed in the comment.<br />';
	include 'connect.php';
	include 'getcomments.php';
	?>
</div>
<div id="forms">
<form action="addcomment.php" method="GET">
		<?php
			echo '<span>'.$warning.'</span>';
		?>
		Your name: <input type="text" name="name" /><br />
		<textarea name="comment" cols="60" rows="6"></textarea><br />
		<input type="submit" name="submit" />
	</form>
</div>
</div>
<?php
if(@$redirect == true){
	header('Location: iframe.php#'.$c);
}
ob_end_flush();
?>
</body>
</html>