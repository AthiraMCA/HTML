<html>
<head>
</head>
<body>
<form method="POST">
Enter the String:<input type=text name="str"/>
<button onclick="submit" value="submit">reverse</button>
</form>
</body>
</html>
<?php
if($_POST)
{
$str=$_POST['str'];
$rev=strrev($str);
echo "The reverse of $str is $rev";
}
?>
