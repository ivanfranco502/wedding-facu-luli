<?php 
//Add here the email where you want to recieve data sent from the form.
$your_email="facundoball@hotmail.com";
$result = 'Lamentablemente ha surgido un inconveniente en la confirmacion. Vuelva a intentarlo.';
if(!empty($_POST)){
    
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $phone = $_POST['form_phone'];
    $subject = $_POST['form_subject'];
    $message = $_POST['form_message'];		

    $to      = $your_email;
    $subject = 'Web casamiento contacto: '.$subject;
    $headers = 'From: '.$name . ' - '.$email ."\r\n";
    $message = 'New message from your wedding contact form: ' ."\r\n".'Name: '.$name."\r\n".'Email: '.$email."\r\n".'Phone: '.$phone."\r\n".'Message: '.$message;
    
    if(mail($to, $subject, $message, $headers)){
        $result = 'Su confirmacion ha sido realizada, muchas gracias!';
    }
}
echo $result;
?>