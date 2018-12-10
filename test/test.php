<html>
<head>
<title>connecting my sql</title>
</head>
<body>
<?
$dbhost='localhost:3036';
$dbuser='chiku';
$dbuser='chiku123';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
	die('could not connect:'.mysqli_error());
}
echo "connected successfully\n";
mysqli_close($conn);
?>
</body>
</html>