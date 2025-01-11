<html>
<head></head>
<body>
<form method ="POST">
Enter the Limit:<input type="text" name="number"/>
<button name="submit">submit</button>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['number'];
$num1=0;
$num2=1;
echo "The Fibonacci Series is:\n";
echo "$num1 $num2";
for($i=2;$i<$n;$i++)
{
 $num3=$num1+$num2;
 echo " $num3";
 $num1=$num2;
 $num2=$num3;
}
}
?>

