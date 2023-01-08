<?php 


// Trova le occorrenze delle vocali in una stringa

function calc_string($string, $vocali) {
    
    $res_arr = [];
    
    for($i=0; $i < strlen($string); $i++) {
        
        $character = substr($string,$i,1);
        
        if(in_array($character, $vocali)) {
            
            if(isset($res_arr[$character])) {
                
                $res_arr[$character]++;
                
            } else {
                
                $res_arr[$character] = 1;
            }
            
        }
    }
    
    return $res_arr;
}




$string = "la casa sull'alberoo";
$vocali = ["a","e","i","o","u"];

$output = calc_string($string,$vocali);
print_r($output);


?>
