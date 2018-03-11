<?php 
    $to = "default@ddd.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $message = $email . " " . $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    
    $headers = "From:" . $from;
    $retval = mail($to,$subject,$message,$headers);
    
    if ($retval == true) {
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    } else {
        echo "Message could not be sent... <a href='contacts.html'>Click here</a> to send another message.";
    }  
?>