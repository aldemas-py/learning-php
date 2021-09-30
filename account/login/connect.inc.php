<?php

//connecting to the database

define('host', 'localhost') ;
define('user', 'root');
define('password', '');
define('db', 'accounts');


	$connect = mysqli_connect(host, user, password, db);
	if ($connect) {
	echo "connection succesfull!";

		}
		else{

			die("connection error" . mysqli_connect_error());

		}

?>