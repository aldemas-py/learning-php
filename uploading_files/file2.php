<?php

if(isset($_FILES['photos']))
{
	$errors=array();
	
	$filename=$_FILES['photos']['name'];
	$filesize=$_FILES['photos']['size'];
	$temporalylocation=$_FILES['photos']['tmp_name'];
	$filetype=$_FILES['photos']['type'];
	//$error==$_FILES['photos']['error'];
	
	$extensions=array("jpeg", "jpg", "gif", "png");
	$file_extention= strtolower(end(explode(".", $_FILES['photos']['name']))); 
	
	if(in_array($file_extention, $extensions)===false){
		
		$errors[]= "The file should be in jpeg , jpg, gif or png format";

		
	}else{
		
		move_uploaded_file($temporalylocation, "images/". $filename);
			
			echo "The file was succesfully uploaded ";
		
	}
	
	print_r($errors) ;
	
	
	
}

?>

<!|doctype html>
<html>
<head>
<title>
UPLOAD
</title>
</head>

<body>

<form action="" method="POST" enctype="multipart/form-data">

<h2>Please upload a file</h2>

<label>file name</label>
<input type="file" name="photos">

<input type="submit" value="upload" name="submit">

</form>



</body>
</html>