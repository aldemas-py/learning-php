<?php
require_once("config.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(!empty($_POST['firstname']) && !empty($_POST['username']) && !empty($_POST['password'])){
		$firstname= trim($_POST['firstname']);
		$username= $_POST['username'];
		$password= $_POST['password'];
	}
	
	

}


?>

<html>
<head>
<title>login</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">

body{
	font:14px Verdana;
	
}

.wrapper {
			width: 350px;
			padding:20px;
			margin: auto;
			position: relative;
		}
		
	
</style>
</head>

<body>

<div class="card">


<h4 class="card-header info-color white-text text-center py-3">
<strong>Register below</strong>
 </h4>
	

	<p class="h6 mb-6 text-center">please fill in all the required details</p>
<div id="form" class="wrapper">

	<form action="<?php $_SERVER["PHP_SELF"]?>" method="POST" class="text-center border border-light p-5">
	
	

	<div class="form-group" >
		<label>firstname:<label>
		<input type="text" class="form-control" id="firstname" name="firstname">
		<span class="help-block"></span>
	</div>
	
	<div class="form-group">
		<label>username:<label>
		<input type="text" class="form-control" id="username" name="username">
		<span class="help-block"></span>
	</div>
	
	<div class="form-group">
		<label>password:<label>
		<input type="password" class="form-control" id="password" name="password">
		<span class="help-block"></span>
	</div>
	
	
	<div class="form-group">
		<label>confirm-password:<label>
		<input type="password" class="form-control" id="confirm-password" name="confirm-password">
		<span class="help-block"></span>
	</div>
	
	<div class="form-group">
	<input type="submit" id="submit" class="btn btn-primary btn-block">
	<p class="h6 mb-6">Already have an account <a href="login.php">Log-in</a> here<p>
	</div>








</form>
</div>

</div>





<body>
</html>