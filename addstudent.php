
<?php include 'include/header.php'?>
<div id="body">
		
        <section id="content">

	    <article>
	    <h1>Add Student</h1>


            <fieldset>
               
                <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">First Name:</div></td>
        <td width="171"><input type="text" name="fname" /></td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div></td>
        <td><input type="text" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right">Gender:</div></td>
        <td><input type="text" name="gender" /></td>
      </tr>
      <tr>
        <td><div align="right">Address:</div></td>
        <td><input type="text" name="address" /></td>
      </tr>
      <tr>
        <td><div align="right">Contact No.:</div></td>
        <td><input type="text" name="contact" /></td>
      </tr>
      <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="username" /></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="password" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
	  
    </table>
  </form>
</body>
            </fieldset>
	</article>
        </section>
<?php include 'include/sidebar.php'?>		
<div class="clear"></div>
</div>	
<?php include 'include/footer.php'?>	