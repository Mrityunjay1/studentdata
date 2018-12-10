<?php
session_start();
 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
 
include('connection.php');

$status = mysqli_query($bd,"INSERT INTO register(fname, lname, gender, address, contact, username, password)VALUES('$fname', '$lname', '$gender', '$address', '$contact', '$username', '$password')");
if($status){
	
	header("location: index.php?remarks=success");
}
else{
	
	header("Location:index.php?remarks=Try again");
	header("Location:index.php?remarks=Try again");
}

 
mysqli_close($con);
?>