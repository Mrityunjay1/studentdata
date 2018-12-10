<?php include 'include/header.php'?>
<div id="body">
		
        <section id="content">

	    <article>
	    <h1>Upate Student Info</h1>
 <fieldset> 
<?php
				if (isset($_GET['studentid']))
		
			{
		 echo '  <form action="updateprocess.php" method="POST">';
						mysql_connect("localhost", "root", "") or die(mysql_error());	
						//select Database
						mysql_select_db("student") or die(mysql_error());
						
			$ID=$_GET['studentid'];
			$result = mysql_query("Select * From register WHERE ID='$studentid'") or die(mysql_error());
			
			while($row = mysql_fetch_array($result))
  			{
			
		echo '<input type="hidden" name="id" value="'. $row['studentid'] .'"/>'; 
           
               
              
                    echo ' <p><label for="name">First Name:</label>';
                    echo ' <input name="fname" id="name" value="'. $row['Firstname'] .'" type="text" /></p>';
					echo ' <p><label for="name">Last Name:</label>';
                    echo ' <input name="lname" id="name" value="'. $row['Lastname'] .'" type="text" /></p>';
                    echo ' <p><label for="email">Email:</label>';
                    echo ' <input name="email" id="email" value="'. $row['Email'] .'" type="text" /></p>';
					echo ' <p><label for="name">Phone :</label>';
                    echo ' <input name="phone" id="name" value="'. $row['Phone'] .'" type="text" /></p>';
					echo' <p><input name="Add" style="margin-center: 100px;" class="formbutton" value="Save" type="submit" /></p>';
					
			}
			
			echo'</form>';
			}
			?>
                    
					
                
            </fieldset>
	</article>
        </section>
<?php include 'include/sidebar.php'?>		
<div class="clear"></div>
</div>	
<?php include 'include/footer.php'?>	