<?php
$a = $_GET['l1'];
$b = $_GET['l2'];
$c = $_GET['l3'];
$img = '';
if(($a == $b) && ($b == $c)){
	$img = 'equilatero.jpg';
}
else if(($a != $b) && ($a != $c) && ($b != $c)){
	$img = 'escaleno.jpg';
}else{
	$img = 'isosceles.jpg';
}

echo '<img src="'.$img.'" width="100px">';