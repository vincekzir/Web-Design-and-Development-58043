<html>
<head><title>(Demo 4) My Looping Statements</title></head>
<body>

<?php

echo "While Loop <br>";
// while loop
$fuel = 10;
while($fuel>1)
{
	/*echo "There's enough fuel";
	break;*/
	echo "There's enough fuel <br>";
	--$fuel;
} 

echo "<br><br>Do While Loop <br>";
//do while loop

//example 1
$count = 1;

do
{
	echo "$count times 12 is ".$count*12 . "<br>";
}
while (++$count <=12);


echo "<br>";
//example 2
$fuel2 = 10;

do 
{	
	echo "There's enough fuel <br>";
}
while (--$fuel2>=1);


echo "<br><br>For Loop <br>";
//for loop
for ($fuel=10;$fuel>=1;--$fuel)
{
	echo "There's enough fuel <br>";
}

echo "<br>Foreach Loop<br>";
//foreach loop
$colors = array("red","green","blue");

foreach ($colors as $value)
{
	echo $value."<br>";
}

echo "<br>Break Statement<br>";
//break statement
//example 1
for ($z = 1;$z<=10;$z++) //shows 1 to 3
{
	if ($z==4)
	{
		break;
	}
	echo "The number is ".$z."<br>";
}

echo "<br>";
//example 2
for ($x = 1;$x<10;$x++) //shows #4 
{
	if ($x==4)
	{
		echo "The number is ".$x."<br>";
		break;
	}
}

echo "<br>Continue Statement<br>";
//continue statement
for ($x = 1;$x<=10;$x++)
{
	if ($x==4)
	{
		continue;
	}
	echo "The number is ".$x."<br>";
}

echo "<br>Application #1<br>";
//Application #1

for ($y = 0;$y<=10;$y++)
{
	if ($y==11)
	{
		break;
	}
	echo "Hello ".$y."<br>";
}

echo "<br>Application #2<br>";
//Application #2

$num = 9;

do
{
	echo "$num"."<br>";
}
while (--$num >=3);

?>

<br>by Vince Villasor - 58043

</body>
</html>