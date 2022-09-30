<html>
<head><title> This is my first Webpage</title></head>
<body bgcolor = "yellow">
<p>This HTML will geet delivered as is</p>
<?php echo "<p> But this code is interpreted by PHP and turned into HTML </p>";
	
	/* <-- This is for multiline comment --> */
	
	$username = 'Vince';
	echo $username;
	$count = 21;
	echo "<br>";
	echo $count;
	
	// This is a snippet for PHP code
	echo "<br>";
	echo 6+2;
	
	echo "<br>";
	echo "My name is ".$username;
	
	$number1  = 6;
	$number2 = 2;
	$sum = $number1 + $number2;
	echo "<br>";
	echo $number1." + ".$number2." is equal to ".$number1+$number2;
	// other possible way
	echo "<br>";
	echo "6+2 = $sum";
	
	$pi = 3.1416;
	$radius  = 5;
	echo "<br>";
	echo $pi * ($radius*$radius);
	
	$j = 3;
	$k = 3;
	echo $j;
	echo $k;
	/*if ($j == $k) dolunch();*/
	echo "<br>";
	if ($j===$k)
	{
		echo "TRUE, The numbers are indentical in terms of data type";
	}
	else
		echo "FALSE, The numbers are not indentical in terms of data type";
?>

</body>
</html>