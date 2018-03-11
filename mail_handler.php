<?php 
    $to = "default@ddd.com";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $full_message = $email . " " . $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    
    $retval = mail($to,$subject,$full_message);
    
    echo $first_name . "\n\n";
    echo $last_name . "\n\n";
    echo $email . "\n\n";
    echo $subject . "\n\n";
    echo $message . "\n\n";

    if ($retval == true) {
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    } else {
        echo "Message could not be sent... <a href='contacts.html'>Click here</a> to send another message.";
    }  
?>