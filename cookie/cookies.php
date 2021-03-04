<?php


setcookie("bypass", "thika_road", time()+10*24*60*60);

	if(isset($_COOKIE["bypass"])){
		
		echo 'This is a '. $_COOKIE["bypass"]. ' cookie';
	} else{
		echo 'You have not stored any cookie';
	}
?>

<?php

//setcookie("bypass", "", time()-10000);



?>