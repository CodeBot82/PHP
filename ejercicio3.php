<?php  

// //EJERCICIO DE PHP CODEBOTS :)
// Realiza un codigo que incremente una variable usando una funcion 

function IncremeVariable(){
	
	static $contador = 0;

	$contador++;

	echo $contador." "."<br>";
}

IncremeVariable();
IncremeVariable();
IncremeVariable();
IncremeVariable();

// Listo :)

?>