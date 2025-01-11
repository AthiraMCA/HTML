<html>
<head>
</head>
<body>
<form method="POST">
Enter the Number:<input type="text" name="number">
<button onclick="submit" value="submit"> submit</button>
</form>
</body>
</html>
<?php
if($_POST)
{
$num=$_POST['number'];
$fact=1;
for($i=1;$i<=$num;$i++)
{
$fact=$fact*$i;
}
echo "Factorial of $fact is";
}
?>
