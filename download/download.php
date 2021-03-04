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
		
	echo "<div class='img-box'>";

	echo '<img src="images/sammu.jpg"' . $vehicals . '" width="200" height="200" alt="This is a picture showing vehicals" ' .  pathinfo($vehicals, PATHINFO_FILENAME) .'">';

	echo '<p><a href="download1.php?file=' . urlencode($vehicals) . '">Download</a></p>';

echo "</div>";
	
		
	}
?>
</body>
</html>