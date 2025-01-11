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
$a=$num;
$sum=0;
while($a!=0)
{
$rem=$a%10;
$sum=$sum+($rem*$rem*$rem);
$a=$a/10;
}
if($sum==$num)
{
echo "$num is an Armstrong Number";
}
else
{
echo "$num is not an Armstrong Number";
}
}
?>
