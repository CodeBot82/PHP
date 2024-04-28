<?php


/* 

La función 'frase_mayuscula' convierte una frase dada de la siguiente manera:

- Si el segundo argumento es verdadero (o no se proporciona), convierte la primera letra de cada palabra en mayúsculas.

- Si el segundo argumento es falso, convierte toda la frase en mayúsculas.

*/   

function conversorMLT($frase, $conversor = true){

	$frase = strtolower($frase); // Convierte la frase en minusculas

	if ($conversor == true) {
		
		$frase = ucwords($frase); // Convierte la primera letra de cada palabra en mayúsculas
	
	} else {
		
		$frase = strtoupper($frase); // Convierte la frase en mayuscula
	}
	
	return $frase;
}

echo conversorMLT(("Hola codebots"), /* false */);

// Listo Codebots :) 

?>