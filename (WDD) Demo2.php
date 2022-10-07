<html>
<head><title>My Web Page</title></head>
<body>

<?php

	$content = "Welcome to PHP Programming";
	$a = 5;
	$_msg = "Hello, I am Baymax";
	$x = 8;
	$y = 2;
	
	
	echo $content;
	echo "<br>".$a;
	echo "<br>";
	echo $_msg;
	
	//Arithmetic operations
	echo "<br>";
	echo $x+$y;
	echo "<br>";
	echo $x-$y;
	echo "<br>";
	echo $x*$y;
	echo "<br>";
	echo $x/$y;
	echo "<br>".$x%$y;
	echo "<br>";
	echo $x**$y;
	
	//Comparison operations
	echo "<br>";
	if ($x==$y)
	{
		echo "They are identical";
	}
	else
	{
		echo "They are not identical";
	}
	
	//Increment/Decrement operators
	
	//for loop
	echo "<br><br>For Loop";
	for ($a=10;$a>=1; $a--)
	{
		echo "<br>".$a;
	}
	
	//while loop
	echo "<br><br>While Loop";
	$a = 10;
	while($a>=1)
	{
		echo "<br> The number is : ".$a;
		$a-=1; //$a = $a-1
	}
	
	//do while loop
	echo "<br><br>Do While Loop";
	$a = 10;
	do
	{
		echo "<br> The number is: ".$a;
		$a-=1;
	}
	while ($a>=1);
	
	echo "<br>";
	echo "<br>";
	echo "by Vince Kazer M. Villasor - 58043";
?>

</body>
</html>