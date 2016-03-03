<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<title>Concatenation</title>
</head>
<body>

<?php
	$day = "Saturday";
	$date = 17;
	$year = 2014;
//This is the longer way.
	echo "The date is <strong>".$day." ".$date.", ".$year."</strong>.<br />";
//This is the shorte way.
//<br /> is just a line break.
	echo "The date is <strong>$day $date, $year.</strong>"
?>

</body>
</html>