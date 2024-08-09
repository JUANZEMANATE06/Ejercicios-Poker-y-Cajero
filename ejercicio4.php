<?php
function sumaDigitos($numero)
{
    $suma = 0;
    while ($numero > 0) {
        $suma += $numero % 10;
        $numero = intval($numero / 10);
    }
    return $suma;
}


$numero = 1234;
echo "La suma de los dígitos de $numero es: " . sumaDigitos($numero) . "\n";
