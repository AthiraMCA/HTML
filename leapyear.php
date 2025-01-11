<html>
<head>
</head>
<body>
<form method="POST">
Enter the year:<input type="text" name="number">
<button onclick="submit" value="submit"> submit</button>
</form>
</body>
</html>
<?php
if($_POST)
{
$year=$_POST['number'];
if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0))
{
 echo "$year is a Leap Year";
}
else
{
 echo "$year is not a Leap Year";
}
}
?>