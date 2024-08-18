<?php 

// Crea un programa que genere títulos con palabras clave.

// Codebots 

$palabras_clave = ['tutorial','programación','código','efectos especiales','creatividad',];

function generar_titulo($palabra){
    $titulo = '';
    $num_palabra = rand(3,5);
    for ($i=0; $i < $num_palabra; $i++) { 
        $titulo .= $palabra[array_rand($palabra)]. ' ';
    }
    return trim($titulo);
}

$titulo_aleatorio = generar_titulo($palabras_clave);
echo "Titulo sugerido: ". $titulo_aleatorio;
?>