<?php

class Account {

    private $holder;
    private $employee;
    private $balance;

    public function __construct(Holder $holder, Employee $employee){
        $this->holder = $holder;
        $this->employee = $employee;
        $this->balance = 0;
    }

    public function withdraw(float $value): void {
        if($value < $this->balance){
            $this->balance -= $value;
        }
    }

    public function deposit(float $value): void {
        if($value > 0){
            $this->balance += $value;
        }
    }

    public function transfer(float $value, Conta $account): void {
        if($value < $this->balance){
            $this->withdraw($value);
            $account->deposit($value);
        }
    }

    public function getHolder(): Holder{
        return $this->holder;
    }

    public function getEmployee(): Employee{
        return $this->employee;
    }

    public function getBalance(): int{
        return $this->balance;
    }

    public function __toString(){
        return "$this->holder, BALANCE:$this->balance" . PHP_EOL . "$this->employee";
    }
}
