<?php

DEFINE("HOST", 'localhost');
DEFINE("USER", 'root');
DEFINE("PASSWORD", '');
DEFINE("DB", 'get_updated');



$connect = mysqli_connect(HOST, USER, PASSWORD, DB);
	
	if($connect===false){
		
		die("sorry, connection error").mysqli_connect_error();
		
		
	}


?>