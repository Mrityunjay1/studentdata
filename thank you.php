<?php
session_start();
 
include('connection1.php');
 
$u_name=$_POST['u_name'];
$u_email=$_POST['u_email'];
$message=$_POST['message'];
$phone=$_POST['phone'];
 
mysqli_query($bd, "INSERT INTO response(u_name, u_email, message, phone)VALUES('$u_name', '$u_email', '$message', '$phone')");
 header("location: index.php?remarks=Thank you for contacting us");
mysqli_close($con);
?>