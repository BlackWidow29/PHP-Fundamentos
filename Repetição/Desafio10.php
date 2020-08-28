<?php
    $palavras = explode(' ', rtrim(fgets(STDIN))); 
        
foreach($palavras as $palavra){
    echo $palavra . PHP_EOL;
}