<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "contact";
$prefix = "";
 
$bd = mysqli_connect("localhost", "root", "") or die("Could not connect database");
mysqli_select_db($bd, "contact") or die("Could not select database");
?>