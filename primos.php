<?php

function primos($num1){
    $primo = false;

    for($i = 2; $i < $num1; $i++){
        if($num1 % $i == 0){
            $primo = true;
        }

        if($primo == true){
            break;
        }
    }

    if($num1 == 1){
        $primo = true;
    }

    if($primo == false){
        print("$num1 é primo\n");
    }

    if($primo == true){
        print("$num1 não é primo\n");
    }
}

do {
    $num = readLine("Escreva um número");
   primos($num);
} while ($num > 1);
