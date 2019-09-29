<?php 
// if(isset($_POST['submit'])){
    $to = "santhoshsanthu012@gmail.com"; // this is your Email address
    $from = $_GET['email']; // this is the sender's Email address
    $username = $_GET['username'];
    $phonenumber = $_GET['phonenumber'];
    // $subject = "Form submission";
   
    $message = . "\n\n" . $_GET['message'];
    

    $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    mail($to, $from ,$message,$headers);
    // sends a copy of the message to the sender
    echo "Mail Sent. Thank you   we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    // }
    include 'index.php'
?>



