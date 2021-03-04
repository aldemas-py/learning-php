<?php

error_reporting(0);

session_start();



$_SESSION["firstname"]="peter";
$_SESSION["lastname"]= "jones";
	
	unset($_SESSION["firstname"]);
	echo "This is " . $_SESSION["firstname"] . $_SESSION["lastname"];
?>
<?php

//include_once 'new1.php';
unset($_SESSION["firstname"]);



?>