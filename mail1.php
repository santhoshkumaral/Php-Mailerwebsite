<?php 


require("PHPMailer_5.2.0/class.phpmailer.php");

	

 $emailid=$_POST['emailid'];
        $username=$_POST['username'];
          $phonenumber=$_POST['phonenumber'];
            $message=$_POST['message'];
         //$body=$_POST['body'];

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";        // specify main and backup server
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls"; 
$mail->Port=587;                       // turn on SMTP authentication
$mail->Username = "themrrnaturecure@gmail.com";  // SMTP username
$mail->Password = "MrrInno@54321$";                // SMTP password 
$mail->SetFrom ('themrrnaturecure@gmail.com','MRR Nature Cure-Website');

$mail->AddAddress("themrrnaturecure@gmail.com");             
$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Message from Website";
$mail->Body    = "Name :".$username."\r\n EMail ID : ".$emailid."\r\n Phone : ".$phonenumber."\r\n Message : ".$message;

// $mail->Body    = "Name :" + '$username '+  + " EMail ID : "+ '$emailid ''+ "\r\n" +" Phone : "+  $phonenumber'  + "\r\n" + "Message : "+ '$message';

$mail->AltBody = "";

if(!$mail->Send())
{
   $data["code"]="200";
   $data["results"]="F";
 echo  json_encode($data);
 header("Location:index.php");
  
}else{
    $data["code"]="200";
    $data["results"]="S";
 echo json_encode($data);
 header("Location:index.php");
  
}

?>