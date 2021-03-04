<?php
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
require 'vendor/autoload.php';



if(isset($_POST['submit'])){
$subject= $_POST['subject'];
$email=	$_POST['email'];
$message=$_POST['message'];
$file=$_FILES['file'];
	
$file_name = $file["name"];
$file_tmp = $file["tmp_name"];
$file_ext = explode(".", $file_name);
$file_ext = strtolower(end($file_ext));
$allowed = array("txt", "pdf", "jpg" , "png" , "xlsx" , "docx");
$target_dir = null;
if(in_array($file_ext, $allowed)){
$target_dir = "attachement/" . $file_name;
move_uploaded_file($file_tmp,$target_dir);
}
$mailClient = new MailClass();
$swiftmail = $mailClient->sendMail($subject,$sendto,$body,$target_dir);
}


	



?>


<form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data">
<fieldset>
<!-- Form Name -->
<legend>Form Name</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Add Subject:</label>  
  <div class="col-md-4">
  <input id="textinput" name="subject" type="text" placeholder="add subject" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Send To:</label>  
  <div class="col-md-4">
  <input type="email" id="textinput" name="email" type="text" placeholder="add recipient email" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="message">default text</textarea>
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Attach file</label>
  <div class="col-md-4">
    <input name="file" class="input-file" type="file">
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Click to Send Mail</label>
  <div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-primary">Send</button>
  </div>
</div>
</fieldset>
</form>


<?php




class MailClass {
	
	
	function sendMail($subject , $sendTo , $body , $targetPath=null){
		try{
			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 'tls', 587);
			$transport->setUsername('katelsamyleesparta@gmail.com');
			$transport->setPassword('Buscopan..oo');
			
			$from='katelsammyleesparta@gmail.com';
			
			$message = \Swift_Message::newInstance();
			
			$message->setTo($email);
			$message->setBody($message);
			$message->setSubject($subject);
			$message->setFrom($from);
			
			
			if(!empty($targetPath)){
				
				$message->attach(Swift_Attachment::fromPath($targetpath));
			}
			
			$mailer = \Swift_Mailer::newInstance($transport);
			
			
			$result= $mailer->send($message);
			
			if($result){
				echo 'Message successfully sent';
				
			}else{
				
				echo 'Your message wa not sent';
			}
			
			
		}catch(Exception $e){
			$e->getMessage(); 
			
		}
		
					
	}
	
		
}


?>
