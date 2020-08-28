<?php
    $n = intval(rtrim(fgets(STDIN)));
        
for($i=1;$i<=10;$i++){
    $resultado =  $n * $i;
    echo "{$n} x {$i} = {$resultado}";
}