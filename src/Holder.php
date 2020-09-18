<?php

require_once 'Person.php';

class Holder extends Person{

    private $endereco;

    public function __construct(string $cpf, string $name, string $endereco){
        parent::__construct($cpf, $name);
        $this->endereco = $endereco;
    }

    public function getEndereco(): string{
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void{
        $this->endereco = $endereco;
    }

    public function __toString(){
        return "HOLDER NAME:" . $this->getName() . ", HOLDER CPF:" . $this->getCpf();
    }
}
