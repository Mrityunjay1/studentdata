<?php

mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("student") or die (mysql_error());

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];

				mysql_query("UPDATE register SET Firstname='$Firstname', Lastname='$Lastname', Email='$Email', Phone='$Phone' WHERE ID='$studentid'")
				or die(mysql_error);
				include 'student.php';
?>
