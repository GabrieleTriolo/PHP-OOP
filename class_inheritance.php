<?php 

class Users {
    protected $name;
    protected $age;
    
    public function __construct($name,$age) {
        $this -> name = $name;
        $this -> age = $age;
    }
}

class Admin extends Users {
    
    private $employee;
    
    public function __construct($name,$age,$employee) {
        parent::__construct($name,$age);
        $this -> employee = $employee;
    }
    
    public function check_employee() {
        return $this -> employee;
    }
}



$admin1 = new Admin('Davide',22,true);

echo $admin1 -> check_employee();
?>
