<?php

function generarFibonacci ($numero) {

$bonacci = array ();
$bonacci [0] = 0;

if ($numero > 1) {
    $bonacci[] = 1;

}

for ($i = 2; $i <= $numero; $i++) {
    $bonacci[$i] = $bonacci [$i - 1] + $bonacci [$i - 2];
}
return $bonacci;
}

$numero = readline ("Ingresa el Numero: ");
$bonacciSecuencia = generarFibonacci($numero);

echo "Secuencia de bonacci hasta el numero $numero:\n";
echo implode(",", $bonacciSecuencia) . "\n";

?>

