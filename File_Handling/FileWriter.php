<?php

$file= "notes.txt";


if(file_exists($file)){
	
	$data= "This is room number 300";
$handle= fopen($file, "w");

$contents= fwrite($handle, $data);	 

echo "Success in writing data";

} else{
	
	echo "Sorry file is not found";
}




?>