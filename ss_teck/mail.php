<?php 
if(isset($_POST['submit'])){
    $to = "sudhan@ssteckservices.com, marketing@ssteckservices.com"; // this is your Email address
    $name = $_POST['name']; // this is the sender's Email address
    //$first_name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];  
   	$message = $_POST['message'];
    $subject2 = "www.sstechservices.com - Copy of your form submission";
    $message = "www.sstechservices.com - Enquiry \n\n Name: " . $name . "\n\n Email: " . $email . "\n\n Phone:" . $phone;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;

    $headers = "From:" . $name;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location:http://sstechservices.com'); 
    // You cannot use header and echo together. It's one or the other.
    }
	
?>