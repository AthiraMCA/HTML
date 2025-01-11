<html>
<head></head>
<title>PHP program to check whether a number is odd or even</title>
<body>
<form method="POST">
Enter a Number:<input type="text" name= "number"/><br>
<input type="submit" value="submit"/>
</form>
</body>
</html>
<?php
if($_POST)
{
$num=$_POST['number'];
if($num % 2 == 0)
{
 echo "$num is an Even Number";
}
else
{
 echo "$num is an Odd Number";
}
}
?>

