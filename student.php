<?php include 'include/header.php'?>
<div id="body">
		
        <section id="content">

	    <article>
	    <h1>List of Students</h1>
		<table>
			<thead>
				<tr>
				  <th>student Id</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>Address</th><th>contact no</th>
				</tr>
					</thead>
					
					<tbody>
					<?php
						
						//set up mysql connection
						$con = mysqli_connect("localhost", "root", "") or die(mysql_error());
						//select database
						$dbstatus = mysqli_select_db($con,"student") or die(mysql_error());
						//retrieve all the data from table
						$result = mysqli_query($con,"SELECT * FROM register ")
						or die(mysql_error());
						//store the record of the "tblpeople" table into %row
						
						while($row = mysqli_fetch_array($result)){
						//print out the contents of the entry
						echo '<tr>';
						echo '<td>'.$row['studentid'].'</td>';
						echo '<td>'.$row['fname'].'</td>';
						echo '<td>'.$row['lname'].'</td>';
						echo '<td>'.$row['gender'].'</td>';
						echo '<td>'.$row['address'].'</td>';
						echo '<td>'.$row['contact'].'</td>';
						echo'<td><a href="update.php?ID=' . $row['studentid'] . '" ><input class="formbutton" type ="submit" value="Edit"/></a> | <a href="delete.php?ID=' . $row['studentid'] . '" /><input class="formbutton" type ="submit" value="Delete"/></td>';
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