 <?php
if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($username) && !empty($password)){
		
	$query = "SELECT `id` FROM login WHERE `username` = '$username' AND `password` = '$password'";
		
	$exc = mysqli_query($connect, $query);
	
	if(mysqli_num_rows($exc)==0){
		
		echo 'invalid username or password combination';
	
	} else if(mysqli_num_rows($exc)!=0){
				
		$userid = mysqli_result($exc, 0, 'id');

		 $_SESSION['user_id']= $userid;
		
		$select_query = "SELECT `username` FROM `login` WHERE `id` = '$userid'";
		
		$exec_select_query = mysqli_query($connect, $select_query);
		
		while($rows= mysqli_fetch_assoc($exec_select_query)){
			
			echo 'Welcome '.$rows["username"];
			
			header("Location:loggedin.php");
			
		}
	}
		
	}
	
	
}




?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ;?>" method="POST">
<div>
	<div>
	<label>username</label>
	<input type="text" name="username">
	</div>
	
	<div>
		<label>password</label>
		<input type="password" name="password">
	</div>
	
	<div>
		<input type="submit" name="submit" id="submit">
	<div>


<div>


</form>