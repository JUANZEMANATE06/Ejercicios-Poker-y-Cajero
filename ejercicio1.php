<?php

function esPalindromo($texto) 
{

    $texto = strtolower($texto);
    $texto = preg_replace("/[^a-z0-9]/i", "", $texto);
    $textoAlRevez = strrev($texto);

    if ($texto === $textoAlRevez) {
        return true;
    } else {
        return false;
    }
}

$textoPalabras = readline("Ingresa la Palabra: ");

echo esPalindromo($textoPalabras) ? "Es un Palíndromo" : "No es Palíndromo";

?>

