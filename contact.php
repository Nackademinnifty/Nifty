<?php
$pageTitle = 'Contact us';
$pageId = 'contact';
?>


<?php include 'incl/header.php'?>

<div class="wrapper">

   
   <h1>Contact us Now</h1>
    
    
    <form>
        Name:<br>
        <input type="text" name="name"><br>
        Email:<br>
        <input type="email" name="mail"><br>
        <textarea name="textarea" rows= "10" cols="40">Write your message here</textarea>
        <input type="submit" value="Send">
    </form>
    
    
    
        <p>You can also mail us for any thoughts or ideas, we will reply as fast as we can.</p>
        <address>
            <a href="mailto:info@nifty.com">Mail us here</a>
        </address>
        
        <p>Visit us at:</p>
        <p>Birger Jarlgatan 57, 111 37 Stockholm</p>
        
        </div>

<?php include 'incl/footer.php'?>