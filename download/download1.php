<?php

if(isset($_REQUEST['file'])){
	//Get parameters
	$file = urldecode($_REQUEST["file"]);
	$filepath= "images/sammu.jpg". $file;

	//proceed download
	if(file_exists($filepath)){
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-length: ' . filesize($filepath));
		flush();
		readfile($filepath);
		exit;

		
	}

	
}


?>