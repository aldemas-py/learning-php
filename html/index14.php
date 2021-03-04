<Html>
<title>
page 14
</title>

<Body>
<p>This is the first php tutorial
<br/>

<?php

function addition (){
	
	static $value1=7;
	static $value2=90;
	
	return $value1+$value2;
	
	
}

echo addition().'<br>';

function bee(){
	
	static $counter=1;
	$counter++;
	print $counter;
	print'<br>';
	
}

bee();
bee();
bee();
bee();
bee();
bee();
bee();
bee();
bee();
bee();

?>






<body>
</Html>