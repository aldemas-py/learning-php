<?php 
/*
function getstuff(){

	echo "This sis my first user defined function";
}
getstuff();

echo "<br/>";

function getSum($value , $integer){

	$add = $value+$integer;

	print 'The sum is '. $add;
}

getSum(10, 20);

echo "<br/>";

function getsums($integer, $value = 50 ){

	$add = $value+$integer;

	print 'The sum is '. $add;
}

getsums(20 , 500);


function getSelfMultiply(&$math){

	$math*=$math;

	return $math;

}

 $math  = 22;
getSelfMultiply($math);

echo  $math . "<br/>";
*/

function sampleText(){
	global $sample;
	
	$sample =  'This is sample text';

	//echo $sample;
}
sampleText();

echo  $sample ."<br/>";


 ?>