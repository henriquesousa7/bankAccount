<?php

require_once 'src/Account.php';
require_once 'src/Holder.php';
require_once 'src/Employee.php';

$employee = new Employee("987.654.321-21","Robert",1500);
$holder = new Holder("123.123.123.12","Henrique","Seven st.");
$account1 = new Account($holder, $employee);

$account1->deposit(1200);
$account1->withdraw(860);

echo $account1;