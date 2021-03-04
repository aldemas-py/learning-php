<?php
$to = 'katelsamyleesparta@gmail.com';
$subject = 'welcome to our site';
$message = 'welcome to hack webnet industries web site';
$from = 'katelsammyleesparta@gmail.com';

if(mail($to, $subject, $message)){
	
	echo 'ur email was successfuly sent';
}else{
	echo 'Unable to send ur mail';
	
}






?>