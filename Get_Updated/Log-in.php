<?php

include_once ('core.inc.php');

if(isset($_POST['submit'])){
    
    $username = $_POST['userName'];
    $password = $_POST['password'];
    
    $password_hash = md5($password);
    if(!empty($username) && !empty($password)){
        
    $query = "SELECT `id` FROM login WHERE `username` = '$username' AND `password` = '$password'";
        
    $exc = mysqli_query($db, $query);
    
    if(mysqli_num_rows($exc)==0){
        
        echo 'invalid username or password combination';
    
    } else if(mysqli_num_rows($exc)!=0){
                
        $userid = mysqli_result($exc, 0, 'id');

    
        }   
    }   
}


?>

<!Doctype HTML>
<HTML>
<head>
	<title>	LOG_IN	</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link type = "text/css" href = "css1.css" rel = "stylesheet"/>

</head>
<body>
	
<form class="form-horizontal" action="post" id="log_in">
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
</HTML>

