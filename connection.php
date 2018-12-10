<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "registration";
$prefix = "";
 
$bd = mysqli_connect("localhost", "root", "") or die("Could not connect database");
mysqli_select_db($bd, "student") or die("Could not select database");
?>