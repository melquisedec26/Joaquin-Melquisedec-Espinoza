<?php
$l1= $_REQUEST['ladoa'];
$l2= $_REQUEST['ladob'];

$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

if ($_REQUEST['resultadoarea']) {
	$resultado = calculararea($l1, $l2);
	echo "El área del rectangulo es : $resultado";
}
else
if ($_REQUEST['resultadoex']) {
	$resultad = expresion($a, $b, $c);
	echo "(a+7*c)/(b+2-a)+2*b: $resultad";
}

function expresion ($a, $b, $c){
	return ($a+7*$c)/($b+2-$a)+2*$b;
}

function calculararea ($l1, $l2)
{
	return $l1 * $l2;
}