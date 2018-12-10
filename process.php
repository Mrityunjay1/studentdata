<?php

mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("registration") or die (mysql_error());

session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
 
mysqli_query($bd, "INSERT INTO register(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$gender', '$address', '$contact', '$pic', '$username', '$password')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>
<div id="body">
		
        <section id="content">

	    <article>
	    <h1>List of Students</h1>
		<table>
			<thead>
				<tr>
					<th>Firstname</th><th>Lastname</th><th>Email</th><th>Phone</th><th></th>
				</tr>
					</thead>
					
					<tbody>
					<?php
						
						//set up mysql connection
						$con = mysqli_connect("localhost", "root", "") or die(mysql_error());
						//select database
						$dbstatus = mysqli_select_db($con,"student") or die(mysql_error());
						//retrieve all the data from table
						$result = mysqli_query($con,"SELECT * FROM tblpeople")
						or die(mysql_error());
						//store the record of the "tblpeople" table into %row
						
						while($row = mysqli_fetch_array($result)){
						//print out the contents of the entry
						echo '<tr>';
						echo '<td>'.$row['fname'].'</td>';
						echo '<td>'.$row['lname'].'</td>';
						echo '<td>'.$row['email'].'</td>';
						echo '<td>'.$row['phone'].'</td>';
						if($fname == $row['fname']){
							echo'<td><input type="submit" value="Edit"> <input type="submit" value="Delete"></td>';
						}
						}
						?>
				</tr>

					
			</tbody>
			</table>
            
            
      		</article>
        </section>
	
			
<?php include 'include/sidebar.php'?>		
<div class="clear"></div>
</div>	
<?php include 'include/footer.php'?>	