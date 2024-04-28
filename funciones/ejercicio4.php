<?php  


function cambiaMayuscula (&$param){

	$param = strtolower($param);

	$param = ucwords($param);

	return $param;
}

$cadena = "hOlA mUnDo";

echo cambiaMayuscula($cadena). "<br>";

echo $cadena;
?>