
<?php

// Realiza un programa de dos numeros aleatorios, muestre esos numeros en pantalla ,los sume y muestre el resultado, numero 1 tendra un rango ente 1,10 numero2 tendra un rango entre 20,50

// CODEBOTS

// Creamos las variables y el rango del numero aleatorio
$num1 = rand(1,10);
$num2 = rand(20,50);

// Mostramos esos numeros en pantalla
echo "Primer numero: $num1";
echo "<br><br>";
echo "Segundo numero: $num2";

// Sumar numeros
$result = $num1 + $num2;
echo "<br><br>";
echo "La suma es: $result";

?>

