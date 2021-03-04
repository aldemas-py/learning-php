<?php


$connect = mysqli_connect('localhost', 'root', '', 'get_updated');

if($connect===false){
	echo 'huuuuuuuuuu';
	die('no connection made').mysqli_connect_error();
	
}
$insert = "INSERT INTO users(first_name, last_name, password) VALUES(?, ?, ?)";

if($prep = mysqli_prepare($connect, $insert)){
	
	//bind valuables to prepared statement
	
	$bind = mysqli_stmt_bind_param($prep, "sss", $first_name, $last_name, $password);
	
	$first_name="shazzam";
	$last_name="kimani";
	$password="12sam";
	mysqli_stmt_execute($prep);
	
	$first_name="benja";
	$last_name="Mbuthia";
	$password="mars123";
	mysqli_stmt_execute($prep);

	$first_name="moses";
	$last_name="kinyash";
	$password="andy";
	mysqli_stmt_execute($prep);	
	
	echo "data recorded successfuly";
}else{
	
	die(mysqli_error($connect));
}
mysqli_stmt_close($prep);






?>
