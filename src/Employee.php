<?php

require_once 'Person.php';

class Employee extends Person{

    private $salary;

    public function __construct(string $cpf, string $name, float $salary){
        parent::__construct($cpf,$name);
        $this->salary = $salary;
    }

    public function getSalary(): float{
        return $this->salary;
    }

    public function __toString(){
        return "EMP NAME:" . $this->getName() . ", EMP CPF:" . $this->getCpf() . ", EMP SALARY:$this->salary";
    }
}