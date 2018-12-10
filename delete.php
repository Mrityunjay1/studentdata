<?php
              if(isset($_GET['studentid']))
			  {
						//set up mysql connection
						$con=mysqli_connect("localhost", "root", "","student") or die(mysql_error());
						//select database
						//mysql_select_db("student") or die(mysql_error());
						//retrieve all the data from table
						$ID=$_GET['studentid'];
						mysqli_query($con,"DELETE FROM register where ID='studentid'");
						{
							echo "good";
						}
						
						include 'student.php';
						
			  }
			  ?>