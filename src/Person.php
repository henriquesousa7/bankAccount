<?php

class Person{

    private $cpf;
    private $name;

    public function __construct(string $cpf, string $name){
        $this->cpf = $cpf;
        $this->name = $name;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getName(){
        return $this->name;
    }


}