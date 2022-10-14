<html>
<head>
<title>Exercise 2</title></head>
<body bgcolor = "yellow" align = center>

<h1> See if you Pass 

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Grade: <input type="number" name="grade">
  <input type="submit">
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	// collect value of input field
	$grade = $_REQUEST['grade'];
	if (empty($grade)) 
	{
	  echo "None <br>";
	} 
	else 
	{
	echo "The inputted grade is: ".$grade."<br>";
	}

//using elseif statement
	if ($grade>=70)
	{
	echo "<br>Congratulations! You PASSED";
	}
	elseif ($grade<60)
	{
		echo "<br>You FAILED, Try harder next time";
	}
	else 
	{
		echo "<br>Almost there! You will need REMEDIAL";
	}
	
	/* another way
	elseif (60<=$grade and $grade<=69)
	{
		echo "<br>Almost there! You will need REMEDIAL";
	}
	else
	{
		echo "<br>You FAILED, Try harder next time";
	}*/
}


?></h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>by Vince Villasor - 58043

</body>
</html>