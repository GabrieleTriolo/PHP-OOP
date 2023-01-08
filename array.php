<?php

// Trovare la minor occorrenza in un array

// Soluzione dividi et impera

// 1) Contare le occorenze di tutti gli elementi dell'array

function calc_occ($array) {
    
    $new_arr = [];
    
    foreach ($array as $value) {
        
        if(isset($new_arr[$value])) {
            
            $new_arr[$value]++;
            
        }
        
        $new_arr[$value] = 1;
    }
    
    print_r($new_arr);
} 


calc_occ([2,43,5,5,12]);


?>
