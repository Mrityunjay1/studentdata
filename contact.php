<?php include 'include/header.php'?>
<div id="body">
		
        <section id="content">

	    <article>
	    <h1>Contact Us</h1>

      
            <h3>Contact us by sending a message provided with your information. We would like to serve you in our courteous ways.</h3>

            <fieldset>
               
                <form action="thank you.php" method="POST">
                    <p><label for="name">Name:</label>
                    <input name="name" id="name" value="" type="text" /></p>
                    <p><label for="email">Email:</label>
                    <input name="email" id="email" value="" type="text" /></p>

                    <p><label for="message">Message:</label>
                    <textarea cols="37" rows="11" name="message" id="message"></textarea></p>
                    <p><label for="contact number">Phone Number:</label>
					<input name="contact number" id="contact number" value="" type="text" /></p>
					<p><input name="send" style="margin-left: 150px;" class="formbutton" value="Send" type="submit" /></p>
                </form>
            </fieldset>
            
      		</article>
        </section>
<?php include 'include/sidebar.php'?>		
<div class="clear"></div>
</div>	
<?php include 'include/footer.php'?>	