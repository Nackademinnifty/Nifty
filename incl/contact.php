<?php
$pageTitle = 'Contact us';
$pageId = 'contact';
?>


<?php include 'incl/header.php'?>

<form>
	Name:<br>
	<input type="text" name="name"><br>
	Email:<br>
	<input type="email" name="mail"><br>
	<textarea name="textarea" rows= "10" cols="40">Write your message here</textarea>
	<input type="submit" value="Send">
</form>


<?php include 'incl/footer.php'?>