<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "../lib/mail_app.php";


$name =  $_POST['name'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];
$email_to = "aqsm2011@gmail.com";
$propose_msg = "Hello, Aqs,<br>
                    You have new message from <strong>".strtoupper($name)."</strong> posted on your website. Here is the message: <br>
                    <em>".$message."</em><br>
                    You can contact them via ".$email."<br>
                    Have a good day, Aqs!";
//send mail
send_mail($email, $email_to, $subject, $propose_msg);
echo "<strong>Thanks for contacting me. I will get back to you soon!</strong>";

 ?>
