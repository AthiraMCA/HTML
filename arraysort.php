<html>
<head>
</head>
<body>
</form>
</body>
</html>
<?php
function array_sort($a)
{
for($x=0;$x<count($a);++$x)
{
$min=$x;
for($y=$x+1;$y<count($a);++$y)
{
if($a[$y]<$a[$min])
{
$temp=$a[$min];
$a[$min]=$a[$y];
$a[$y]=$temp;
}
}
}
return $a;
}
$a=[50,14,21,27,10];
print_r(array_sort($a));
?>
