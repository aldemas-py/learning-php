<?php

/*
$games = array("Foot_ball", "Rugby" , "Tenis");

print json_encode($games, JSON_FORCE_OBJECT);



$json = '{"sam" : 18 , "Benja":26 , "Moses" : 27}';

var_dump(json_decode($json));
*/

// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
$assoc_array =json_decode($json, true);

	echo $assoc_array["Peter"] .'<br>';
	echo $assoc_array["Harry"].'<br>';
	echo $assoc_array["John"].'<br>';
	echo $assoc_array["Clark"].'<br>'.'<br>';

	$Objc = json_decode($json);

	echo $Objc->Peter.'<br>';
	echo $Objc->Harry.'<br>';
	echo $Objc->John.'<br>';
	echo $Objc->Clark.'<br>';

?>