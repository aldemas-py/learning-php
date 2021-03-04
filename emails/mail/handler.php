<?php

require_once('./vendor/autoload.php');

use('FormGuide\Handlx\FormHandler');

$dir = new FormHandler();

$saamValidator = $dir->getValidator();

$saamValidator-> fields(['firstname', 'lastname', 'email', 'phone'])->areRequired()->maxLength(50);

$saamValidator-> fields('email')->isEmail();

$saamValidator-> fields('message')->maxLength(1000);



$dir->sendEmailTo('katelsamyleesparta@gmail.com'); // ← Your email here

$mailer = $dir->getMailer();

//Using  SMTP account
$mailer->IsSMTP();
$mailer->SMTPAuth   = true;
$mailer->SMTPSecure = "tls";
$mailer->Host       = "spaninstitute.ac.ke";
$mailer->Username   = "frontoffice@spaninstitute.ac.ke";
$mailer->Password   = "fQoF]SYSe)21";

$mailer->setFrom('info@spaninstitute.ac.ke', 'Contact Page');

echo $dir->process($_POST);


?>