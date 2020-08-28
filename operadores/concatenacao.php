<?php

$escola = "TreinaWeb";

$curso = "PHP";

$frase = "Faça um curso na " . $curso . " na escola " . $escola;

echo $frase;

$string = 'string com aspas simples';

$frase = "<br> Faça um curso de {$curso} na escola {$escola}";

echo $frase;