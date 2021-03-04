<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('vendor/autoload.php'); 

$mail = new PHPMailer(TRUE);

try{
	
	$mail->setFrom('sam@gmail.com' , 'sammy');
		
	$mail->addAddress('katelsamyleesparta@gmail.com' , 'sam');
	
	$mail->Subject = "this is a dummy";
	
	$mail->Body = 'This is my body';
	
	/* SMTP parameters. */
	
	/*Tell phpmailer you are using smpt*/
	$mail->isSmtp();
	
	/* SMTP server address. */
	$mail->Host= 'learning@spaninstitute.ac.ke';
	
	 /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'katelsamyleesparta@gmail';
   
   /* SMTP authentication password. */
   $mail->Password = 'Buscopan..oo';
   
   /* Set the SMTP port. */
   $mail->Port = 465;
	
	$mail->isSMTP();
	
	
	

	$mail->send();
	
}
	catch(\Exception $e){
	
	echo	$e->getMessage();
	
	}
		catch(Exception $e){
	
	echo	$e->getError();
	}



?>

<html>
<head>
<title>
This is a send email
</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">

	<div class="row">
	
	<div class="col-md-6 col-md-offset-3">
                    <h2>Contact Us</h2> 
                    <p> Send us your message and we will get back to you as soon as possible </p>
                    <form role="form" method="post" id="reused_form" enctype="multipart/form-data" action="email2.php">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Message:</label>
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs" name="sub">Post It! </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
	
	</div>


</div>












</body>
</html>