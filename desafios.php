<?php

function isPrimo(int $number): bool {

    $divisiveis = 0;

    for($i = $number; $i >= 1; $i--) {
        if($number % $i == 0)
            $divisiveis++;
    }

    return $divisiveis == 2;
}

function showAllPrimosUntil(int $number) {
    
    $primos = [];

    for($i = 0; $i < $number; $i++) {
        if(isPrimo($i)) {
            $primos[] = $i;        
        }
    }

    return implode(", ", $primos);
}

echo showAllPrimosUntil(100);