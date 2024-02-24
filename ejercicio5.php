<?php  


// EJERCICIO DE PHP CODEBOTS :)
// Realiza un codigo que compruebe si dos numeros son par o impar. esos numero son 4 y 7 te que comprabar cual de los dos es impar y par.


function parImpar($numero){
    if ($numero % 2 == 0) {
        echo "$numero Es par <br>";
    } else {
        echo "$numero Es impar <br>";
    }
    
}

parImpar(4); 
parImpar(2);

// Listo :)
?>