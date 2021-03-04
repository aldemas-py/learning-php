<?php

$db = mysqli_connect('localhost', 'root', '', 'get_updated');

if ($db===false) {

 die("sorry no connection made to the target system").mysqli_connect_error();
}

if(isset($_POST['submit'])){
	
	    $query = "INSERT INTO login(first_name, last_name, username, email, password, password_hash)VALUES(?, ?, ?, ?, ?, ?)";
	
	if($prepair = mysqli_prepare($db, $query)){
		
	
	$bind = mysqli_stmt_bind_param($prepair, "ssssss", $firstname, $lastname, $username, $email, $password, $password_hash);
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

	mysqli_stmt_execute($prepair);

 
    
    
}
mysqli_stmt_close($prepair);

	
}





?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    
    <!--Pulling Awesome Font -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link type = "text/css" href = "css1.css" rel = "stylesheet"/>

<form action="create.php" method="post">    
    <div class="container">
            <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h3 class="panel-title">Create your account<small>It's free!</small></h3>
                            </div>
                            <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="username" id="user_name" class="form-control input-sm" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>


    
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="submit" value="Register" class="btn btn-info btn-block" name="submit">

                                <div class="wrapper">
                                        <span class="group-btn">     
                                            <a href="Log-in.php" class="btn btn-primary btn-md">Log_In<i class="fa fa-sign-in"></i></a>
                                        </span>
               
                                        </div>

    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>