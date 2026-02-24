<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer files
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';


//   include '../conn.php';
//   require 'mailer/PHPMailerAutoload.php';
  
  

  
     if(isset($_POST['submit'])) {
         

         /******* mail scripts */

            $message .= '<div>';
			$message .= '<img src="https://www.apextmt.com/images/logo.png" alt="Logo"  style="margin: 0 auto;display: table;" />';
			$message .= '</div>';
			$message .= '<table rules="all" style="border-color: #666;width: 500px;margin: 0 auto;border: 1px solid #eee;" cellpadding="20"" cellpadding="20">';
			$message .= "<tr ><td ><strong><h3>Enquiry Details </h3></td></tr>";
			$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['businessname']) . "</td></tr>";
			$message .= "<tr><td><strong> Email :</strong> </td><td>" . strip_tags($_POST['business_email']) . "</td></tr>";
			$message .= "<tr><td><strong> Phonenumber :</strong> </td><td>" . strip_tags($_POST['mobile_number']) . "</td></tr>";
			$message .= "<tr><td><strong> Message :</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";	
		
			$subject="Enquiry from Apex TMT Investor form";

            $mail = new PHPMailer(true);

            
            $mail->SMTPDebug = 0;                               // Enable verbose debug output
            $mail->isSMTP();                                    // Set mailer to use SMTP
            $mail->Host = 'mail.ayatiworks.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                             // Enable SMTP authentication
            $mail->Username = 'emailsmtp@ayatiworks.com';           // SMTP username
            $mail->Password = 'hYd@W,$nwNjC';                       // SMTP password
            $mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                     
            $mail->setFrom($_POST['business_email'],'THE Apex TMT Investor');
            $to ="gopi@ayatiworks.com";
            $mail->addAddress($to);
            // $mail->AddCC("ram@fandomcricket.com");
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->IsHTML(true);
            
      
            if($mail->send()){
                
                 echo "<script type='text/javascript'>alert('Your details have been submitted Successfully.Our admin team will contact you as soon as')</script>";
    echo "<script>window.location.href='investor-corner.php';</script>";
            
           
            } else {
              echo '<META HTTP-EQUIV="Refresh" Content="0; URL=investors-corner.php?msg=failure">';
            }
            
           
		 /*************end */

	
	 }
     
	 
	
	    	
	    	
	
 
?>


?>