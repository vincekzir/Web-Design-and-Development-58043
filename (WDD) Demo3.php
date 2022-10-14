<html>
<head>
<title>(Demo 2) My First Webpage</title></head>
<body align = center><h1>


<?php
// This is a sigle comment
/* This is a multiline comment */

$a = 2;
$b = 3;
$month = "December";

//Equality and Inequality
if ($a == $b) echo "a is equal to b";
/* if ($a !== $b) echo "a is not equal to b"; */
if ($month = "December") echo "It's Christmas time!";

/*string comparison?
$c = "1000";
$d = "+1000";
if ($c === $d) echo "a is equal to b";*/

//comparison operators
if ($a>$b) echo "a is greater than b";
echo "<br>";
if ($a<$b) echo "a is less than b";
echo "<br>";
if ($a>=$b) echo "a is greater than or equal to b";
echo "<br>";
if ($a<=$b) echo "a is less than or equal to b";
echo "<br>";


$c = 1;
$d = 0;

//logical operators
echo ($c AND $d)."<br>";
echo ($c OR $d)."<br>";
echo ($c xor $d)."<br>";

/* another way
if ($c or $d)
{
	echo "One of the output is TRUE <br>";
}*/

//if statement
$bank_balance = 90;
$savings = 100;

if ($bank_balance<100)
	{	
		$money = 1000;
		$bank_balance+=$money; //same as bankbalance + money
		echo "<br>";
		echo $bank_balance;
	}

//if else statement
$bank_balance = 110;
$savings = 100;
if ($bank_balance<100)
	{	
		$money = 1000;
		$bank_balance+=$money; //same as bankbalance + money
		echo "<br>The bank balance is: ".$bank_balance;
	}
else
	{
		$savings=+50;
		$bank_balance-=50; //same as bankbalance - 50
		echo "<br>The savings is: ".$savings;
		echo "<br>The bank balance is: ".$bank_balance;
	}

//elseif statement - try during free time

//swtich statement
$page = "Webpage";
switch ($page)
{
	case "Home":
	{
		echo "<br>You chose Home";
		break;
	}
	case "Login":
	{
		echo "<br>You chose Login";
		break;
	}
	case "Link":
	{
		echo "<br>You chose Links";
		break;
	}
	default:
	{
		echo "<br>None of the choices is correct";
	}
}


//? operator
$fuel = 1;
echo $fuel<=1?"<br>Fill up the tank now": "<br>There's enough fuel";
$fuel = 2;
echo $fuel<=1?"<br>Fill up the tank now": "<br>There's enough fuel";




?></h1>


</body>
</html>