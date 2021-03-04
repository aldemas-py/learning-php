<?php

$file= "sam.txt";

if(file_exists($file)){
	
	//$handle=fopen($file, "r+");
	////
	
	
	//$contents= fread($handle, "50");
	
	//$contents= fread($handle, filesize($file));
	//fwrite($file);
	//fclose($handle);
	
	//echo $contents;
	
	//readfile($file);
	
	$path= file_get_contents ($file);
	
	
	echo $path;
}
 else {
	 
	 echo "this file does not exist.";
	 
	 }
	 
	 

?>