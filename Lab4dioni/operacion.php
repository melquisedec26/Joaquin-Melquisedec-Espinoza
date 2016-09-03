<?php
$a = $_REQUEST['valor1'];
$b = $_REQUEST['valor2'];

if ($_REQUEST['operador']=="suma") {
	$r_suma = sumar($a,$b);
	echo "La suma es: $r_suma";
}
else
if ($_REQUEST['operador'] == "resta") {
	$r_resta = resta($a,$b);
	echo "La resta es: $r_resta";
}

else
if ($_REQUEST['operador'] == "multiplicacion") {
	$r_multi = multi($a,$b);
	echo "La Multiplicación es: $r_multi";
}
else
if ($_REQUEST['operador'] == "division") {
	$r_div = div($a,$b);
	echo "La divison es: $r_div";
}

function sumar ($a,$b){
	$suma= $a + $b;
	return $suma;
}

function resta ($a, $b)
{
	$resta= $a-$b;
	return $resta;
}

function multi ($a, $b)
{
	$mul= $a*$b;
	return $mul;
}

function div ($a, $b)
{
	$divi= $a/$b;
	return $divi;
}