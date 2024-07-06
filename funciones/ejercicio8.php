<?php

// crea una función que concatene caracteres.

// Hi Codebots :)

function concatenar(...$palabras){
    $resultado = " ";

    foreach ($palabras as $palabra) {
        $resultado = $resultado . $palabra . " ";
    }

    echo $resultado;

}


concatenar("Hola","soy","Codebot");


// Listo codebots :)










echo "<br><br><br><br>";
function enterosNumber(int $num1, int $num2): int | float // puedo definir el tipo de dato a recibir hay que tomar en cuenta que si llegáramos a dividir dicho resultado y nos da decimal saldría error porque estamos diciendo que estamos esperando un tipo de dato entero pudiendo agregar otro tipo de dato como float

{
    
    return $num1 + $num2;
}

$resultado = enterosNumber(5,10.9);

echo $resultado;

?>