<?php


// EJERCICIO DE PHP CODEBOTS :)

// Realiza un codigo que compruebe dos cadenas de caracteres, y mostrar en pantalla si son iguales o no, ademas de eso el codigo tiene que diferenciar entre masyusculas y minusculas, ejemplo: si tenemos el texto 1 = Casa1 y texto 2 = casa1 tiene que mostrar no son iguales.



// strcmp == (comprueba con mayusculas)
// strcasecmp == (combrueba sin darle importancia a las mayusculas)

$texto1 = "Casa1";
$texto2 = "Casa1";

$result = strcasecmp(str1, str2)($texto1,  $texto2);

if ($result) {
	
	echo "NO son iguales";

} else {
	echo "SI son iguales";
}


?>