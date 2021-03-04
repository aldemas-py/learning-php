<?php




class MailClass {
	
	
	function sendMail($subject , $sendTo , $body , $targetPath=null){
		try{
			$transport = \Swift_SmtpTransport::newInstance();
			
			
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
