//Minha solução
<?php
    $n = intval(rtrim(fgets(STDIN)));
        
    //Informe seu código aqui
    if(($n % 2 === 0 && $n < 10) || ($n % 2 === 0 && $n > 20)){
        echo "Não é estranho";
    }
    elseif(($n % 2 === 0) && ($n >= 10 && $n <=20)){
        echo "Estranho";
    }
    elseif($n % 2 === 1){
        echo "Estranho";
    }

//Solução do curso

    $n = intval(rtrim(fgets(STDIN)));
        
    if($n % 2 !== 0)
    {
        echo "Estranho";
    }
    else
    {
        if($n < 10)
        {
            echo "Não é estranho";
        }
        elseif($n >= 10 && $n <= 20)
        {
            echo "Estranho";
        }
        else
        {
            echo "Não é estranho";
        }
    }