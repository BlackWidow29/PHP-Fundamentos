<?php

$numeros = [];

$j = 0;
for ($i = 0; $i <= 50; $i += 1) {
    $numeros[$i] = $j;
    $j += 2;
}

// for ($i = 0; $i <= count($numeros); $i++) {
//     echo $numeros[$i] . "<br>";
// }

//Foreach

foreach ($numeros as $key => $value) {
    echo "chave: {$key} - valor: {$value} <br>";
}
