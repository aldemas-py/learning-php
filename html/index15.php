<Html>
<title>
page 15
</title>

<Body>
<p>This is the 15th php tutorial
<br/>

<?php

//include "index14.php";
require ("index14.php");
$time =time();

//$human_readable= date ("D:m:Y", $time);

//$human_readable= date ("F d, Y h:i:s", $time);

$human_readable= date ("F d, Y H:i:s", $time);

echo "The current time is " .$human_readable;


?>






<body>
</Html>