<html>
<head>
</head>
<body>
<form method="POST">
Enter the input:<input type=text name="input"/>
<button onclick="submit" value="submit">check</button>
</form>
</body>
</html>
<?php
if($_POST)
{
$input=$_POST['input'];
$rev=strrev($input);
if($rev==$input)
{
echo "The entered input is an Palindrome";
}
else
{
echo "The entered input is not an Palindrome";
}
}
?>
