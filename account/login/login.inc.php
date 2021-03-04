<?php
	if (isset($_POST['submit'])) {

		echo $username = $_POST['username'];
		echo $password = $_POST['password'];

		if (!empty($username) && !empty($password)) {

			$query = "SELECT id FROM users WHERE `username`= $username AND `password` = $password ";

			$Run_query = mysqli_query($connect, $query)

		}
	





	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#C6CBC0">
	<form  action="<?php echo htmlentities($_SERVER['PHP_SELF']) ;?>" methord="POST" >
  <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-3">
                <div class="form-login">
                <h4>Welcome back.</h4>
                <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username" />
                </br>
                <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password" />
                </br>
                <div class="wrapper">
                <span class="group-btn">    
                    <input type="submit" id="submit" class="btn btn-primary btn-md">
                    <a href="create_account.php" class="btn btn-primary btn-md">create account<i class="fa fa-sign-in"></i></a>
                </span>
               
                </div>
            
            </div>
        </div>
    </div>

</form>

</body>
</html>