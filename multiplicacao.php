<?php

function multiplicar($numero1, $numero2){

    $resultado = 0;

    for($i = 0; $i < $numero2; $i++){
        $resultado = $resultado + $numero1;
    }

    return $resultado;

}

print(multiplicar(2, 4) . "\n");
