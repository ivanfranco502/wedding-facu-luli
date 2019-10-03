<?php 
//Add here the email where you want to recieve data sent from the form.
$your_email="facundoball@hotmail.com";
$result = 'Lamentablemente ha surgido un inconveniente en la confirmacion. Vuelva a intentarlo.';
if(!empty($_POST)){
    
    $name = $_POST['form_name'];
    $option = $_POST['assists'];
    $option2 = $_POST['people'];		
    $option3 = $_POST['menu'];
    
    $to      = $your_email;
    $subject = 'Tarjeta casamiento: '.$name;
    $headers = 'From: '.$name . "\r\n";
    $message = 'New RSVP data sent from your website:'."\r\n".'Name: '.$name."\r\n".'Will attend: '.$option."\r\n".'People with: '.$option2."\r\n".'Will eat: '.$option3;
    
    if(mail($to, $subject, $message, $headers)){
        $result = 'Su confirmacion ha sido realizada, muchas gracias!';
    }
}
echo $result;
?>