<?php

//mysql connect in procedual way

$connect = mysqli_connect('localhost', 'root', '', 'learning');

if($connect===false){
	
	die('could not connect '.mysqli_connect_error());
	
}else{
	
	echo "sucess".'<br>';
}




/*
$query_create_DB = "CREATE DATABASE project ";

$create_DB = mysqli_query($connect, $query_create_DB, );
 if($create_DB===false){
	 
	 die('failed to create database');
	 
 }else{
	 
	 echo "success yoh";
 }
 */
$query_create_table = "CREATE TABLE users(
			id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
			firstname VARCHAR(40) NOT NULL,
			email VARCHAR(70)NOT NULL,
			password VARCHAR(50)NOT NULL)";

 if(mysqli_query($connect, $query_create_table)){
	 
	 echo 'Table successfully created';
 }else{
	 
	 echo "sorry Mr script did not run ".mysqli_error($connect);
 }














/*<?php
//mysql connect in obect oriented way


$object_connect = new mysqli('localhost', 'root', '', 'learning');



//mysql connect in pod


$pdo_connect = new PDO("mysql:host=localhost;dbname=learning", "sam", "Buscopan..00");




?>*/
?>