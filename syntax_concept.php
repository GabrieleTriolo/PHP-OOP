<?php

class Users {
    
    private $name;
    public $age;
    
    // Funzione che viene richiamata automaticamente quando viene 
    // creato (o istanziato) un oggetto per quella determinata classe.
    
    function __construct ($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
        
        //echo $name . ' ' . $age;
    }
 
    // Metodo che permette di accedere ad alcune proprietà che sono state
    // dichiarate private all'interno della classe
    
    public function __get($property) {
        // $this si riferisce alla classe
        if(property_exists($this, $property)) {
            return $this -> $property;   
        }
    }
    
    // Metodo che permette di settare alcune proprietà che sono state
    // dichiarate private all'interno della classe
    
    public function __set($property, $value) {
        if(property_exists($this, $property)) {
            $this -> $property = $value;
        }
        return $this -> $property;
    }
    
}

$user1 = new Users("Gabriele", 26);

echo $user1 -> __get("name");
echo $user1 -> __set("age", 30);





?>
