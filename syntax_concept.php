<?php

class Users {
    
    public $name;
    public $age;
    
    // Funzione che viene richiamata automaticamente quando viene 
    // creato (o istanziato) un oggetto per quella determinata classe.
    
    function __construct ($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
        
        echo $name . ' ' . $age;
    }
}

$user1 = new Users("Gabriele", 26);



?>
