<table bgcolor="cyan" cellspacing="0" cellpadding="7" align="center" >
<tr>
	<th bgcolor="indianred">studentid</th>
	<th bgcolor="indianred">fname</th>
	<th bgcolor="indianred">lname</th>
	<th bgcolor="indianred">gender</th>
	<th bgcolor="indianred">address</th>
	<th bgcolor="indianred">contact</th>
	
</tr>

<?php
	
	//Connection.
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("Connection Error!");
	}
	
	//Select database.
	$dbstatus = mysqli_select_db($con,"student");
	if(!$dbstatus){
		die("Database not found!");
	}
	
	//Query.
	$sql = "select * from register";
	
	//Send Query.
	$result = mysqli_query($con,$sql);
	
	//Count data.
	$rowcount = mysqli_num_rows($result);
	
	if($rowcount > 0){
		$row = mysqli_fetch_array($result);
		
		while($row){
			$studentid = $row['studentid'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$gender = $row['gender'];
			$address = $row['address'];
			$contact = $row['contact'];
			
			
			?>
			<tr>
				<td><?php echo $studentid;?></td>
				<td><?php echo $fname;?></td>
				<td><?php echo $lname;?></td>
				<td><?php echo $gender;?></td>
				<td><?php echo $address;?></td>
				<td><?php echo $contact;?></td>
				
			</tr>
			<?php
			$row = mysqli_fetch_array($result);
		}
	}
	else{
		echo "Data not found!";
	}
	
	//Close database connection.
	mysqli_close($con);
?>

</table>