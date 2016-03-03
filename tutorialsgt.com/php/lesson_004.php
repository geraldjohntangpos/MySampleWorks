<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<title>Indentation</title>
</head>
<body>

<?php
$name = "Ichigo";
$age = 15;
if (strtolower ($name) === 'Ichigo'){
	if ($age>=21){
		echo 'You\'re over 21';
		if (1===1){
			echo 'Yes, 1 is equal to 1!';
		}
	}
	}else {
		echo 'You\'re not Ichigo!';
	}
?>

<!--Indentation makes your code more
understandable.
-->

</body>
</html>