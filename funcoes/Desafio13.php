<?php
//Informe seu código aqui
function anoBissexto($ano)
{
    if (($ano % 4 === 0) && ($ano % 400 === 0 || $ano % 100 !== 0)) {
        return true;
    } else {
        return false;
    }
}
$ano = intval(rtrim(fgets(STDIN)));
print(anoBissexto($ano) ? "Ano bissexto" : "Não é ano bissexto");
