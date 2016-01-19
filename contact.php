<?php
$pageTitle = 'Contact us';
$pageId = 'contact';
?>


<?php include 'incl/header.php'?>


<h1>Contact us Now</h1>

<form>
	Name:<br>
	<input type="text" name="name"><br>
	Email:<br>
	<input type="email" name="mail"><br>
	<textarea name="textarea" rows= "10" cols="40">Write your message here</textarea>
	<input type="submit" value="Send">
</form>


<address>
	Contact us for any thoughts or ideas, we reply as fast we can.
	<a href="mailto:info@nifty.com">Mail us here</a>
	You can also visit us at: <br>
	ADDRESS HÄR. <br>
	
</address>

<?php include 'incl/footer.php'?>