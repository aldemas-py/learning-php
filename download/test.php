<!|doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Download</title>
	
<link href="css.css" rel="stylesheet"/>
</head>

<Body>

<h3 color="red">this is a header</h3>

<?php

$images= array("lorries". "Busses");

	foreach($images as $vehicals){
		
	echo "<div class='image-box'>";

//echo "<img src='images/'.$vehicals. alt='this is an image showing bvr' width='200' height='50'.pathinfo($vehicals. PATHINFO_FILENAME)/>";

	echo "<p><a href='download1.php?file=. urlencode($vehicals).'>'<img src='images/'.$vehicals. alt='this is an image showing bvr' width='200' height='50'.pathinfo($vehicals. PATHINFO_FILENAME)/>'</a></p>";


echo "</div>";
	
		
	}
?>
</body>
</html>