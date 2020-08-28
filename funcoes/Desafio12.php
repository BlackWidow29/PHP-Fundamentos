//Professor
<?php
function fatorial(int $n): int
{
    if($n === 0) {
        return 1;
    }
    else {
        return $n * fatorial($n - 1);
    }
}
$n = intval(rtrim(fgets(STDIN)));
print(fatorial($n));

//Minha solução


    //Informe seu código aqui
    function fatorial2($n){
        $resultado = 1;
        while($n >= 1){
            $resultado *= $n;
            $n -= 1;
        }
        return $resultado;
    }
$n = intval(rtrim(fgets(STDIN)));
print(fatorial2($n));