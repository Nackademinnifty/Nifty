<?php
$pageTitle = 'Contact us';
$pageId = 'contacts';
?>


<?php include 'incl/header.php'?>
<div id="contact">
	<div class="wra">

	<h1>Contact us</h1>
	
	<div class="clear">
		<form>
			<p>Name:</p>
			<input type="text" name="name">
			<p>Email:</p>
			<input type="email" name="mail">
			<textarea name="textarea" rows= "10" cols="40" placeholder="Write your message here"></textarea>
			<input type="submit" value="Send">
		</form>
		
		<section>
			<p>You can also mail us for any thoughts or ideas, we will reply as fast as we can.</p>
		<address>
			<a href="mailto:info@nifty.com">Mail us here</a>
		</address>

			<p>Visit us at: </p>
			<p><strong>Birger Jarlsgatan 57, 111 37 Stockholm</strong></p>
	</section>
	</div>
	</div>
</div>

	


<?php include 'incl/footer.php'?>