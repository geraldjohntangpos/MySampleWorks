<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<title>if_if else Statement</title>
</head>
<body>

<?php
$x = 15;
$y = 19;
	if ($x>$y){
		echo "TRUE (it is an if else statement.)<br />";
	}
	else {
		echo "FALSE (it is an if else statement.)<br />";
	}
	
	if ($y>$x){
		echo "This is only an if statement.<br />";
	}
	
/*
if else statement will run your condition and if
the condition is true, it will return the statement
that you assign and if the condition is false, 
it will also  return the statement that you assign.
While if statement will run your condition and if
the condition is true it will return the statement
you assign and if the condition is false, it will
do nothing.
*/
?>

</body>
</html>