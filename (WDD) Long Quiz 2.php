<html>
<head><title>Long Quiz #2</title></head>
<body>

<b>Long Quiz #2<br>
by Vince Villasor - WDD 58043</b>

<?php

echo "<br><br>";
echo "<b>Problem #1</b>"; //problem #1
echo "<br><br>";

$Salary_Rate = 600;
$Salary = $Salary_Rate*15;
$Taxable_Amount  = (30/100)*$Salary;
$Net_Pay = $Salary - $Taxable_Amount;

echo "Salary Rate = ".$Salary_Rate." per day";
echo "<br>";
echo "Salary for 15 days = ".$Salary;
echo "<br>";
echo "Taxable amount (30% of the salary) = ".$Taxable_Amount;
echo "<br>";
echo "Net pay = ".$Net_Pay;
echo "<br><br>";

echo "<b>Problem #2</b>"; //problem #2
echo "<br><br>";

$sum = 0;					// starting value assigned for sum
for ($x = 1; $x<=50; $x++) //using for loop
	{
		$sum = $sum + $x;
	}
	echo "The SUM from 1 to 50 is ".$sum;

?>

</body>
</html>