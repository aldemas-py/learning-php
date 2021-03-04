<Html>
<title>
page 16
</title>

<Body>
<p>This is the first php tutorial
<br/>

<?php
//include "index14.php";
error_reporting(0);
require_once ("index20.php");

$time =time();

//$human_readable= date ("D:m:Y", $time);

//$human_readable= date ("F d, Y h:i:s", $time);

$human_readable= date ("F d, Y H:i:s", $time);

echo "The current time is " .$human_readable;







?>






<body>
</Html>