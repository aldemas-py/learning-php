<?php


$connect = mysqli_connect('localhost', 'root', '', 'id');

if($connect===false){
	echo 'huuuuuuuuuu';
	die('no connection made').mysqli_connect_error();
	
}

//inserting

/*
$insert = "INSERT INTO users(firstname, email, password)VALUES(
								'sam',
								'sam@email.com',
								'dsd34'
								)";

if(mysqli_query($connect, $insert)){
	
 echo 'objective achieved';
	
	
	
}else{
	
	echo 'sorry'.mysqli_error($connect);
}

*/
if(isset($_POST['submit'])){
	
$firstname = mysqli_real_escape_string($connect, $_POST['first_name']);
$lastname = mysqli_real_escape_string($connect, $_POST['last_name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);

$query = "INSERT INTO users(firstname, email, lastname)VALUES(
												'$firstname',
												'$email',
												'$lastname'		
												)";
 $insert = mysqli_query($connect, $query);

	
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="add.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>