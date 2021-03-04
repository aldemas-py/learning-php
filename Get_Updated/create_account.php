<?php

include_once "processes.php";

if(isset($_POST['submit'])){
    
$firstname = mysqli_real_escape_string($db, $_POST['first_name']);
$lastname = mysqli_real_escape_string($db, $_POST['last_name']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password_confirmation = mysqli_real_escape_string($db, $_POST['password_confirmation']);

$query = "INSERT INTO login(firstname, lastname, username, email, password, password_confirmation)VALUES(
                                                '$firstname',
                                                '$lastname',
                                                '$username',
                                                '$email',
                                                '$password',
                                                '$password_confirmation'
                                                )";
 $insert = mysqli_query($db, $query).mysqli_error($db);

    
    
}if ($insert===true) {
echo "succes";


}
else{

    echo "error";
}



?>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link type = "text/css" href = "css1.css" rel = "stylesheet"/>

<form action="create_account.php" method="post">    
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