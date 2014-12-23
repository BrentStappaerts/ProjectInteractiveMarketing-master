<?php  
if (!isset($_POST['email'])) {  
    echo 'Uw email is niet correct!';  
    exit;  
}  
 
$email = htmlspecialchars($_POST['email']);  

  
$tijd = time();  
$datum = strftime('%d/%m/%y %H:%M', $tijd);  
$ip = getenv('REMOTE_ADDR');  
$message = $email.' en het IP '.$ip.' stuurde op '.$datum.' het volgende bericht:  
____________________________________  
'.$email.'  
------------------------------------';  
  
mail('brent.stappaerts@gmail.com', 'Bericht van Moreblocks', $message, 'From: '.$email); 
 
window.location = 'http://googl.com';
?> 

