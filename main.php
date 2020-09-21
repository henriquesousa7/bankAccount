<?php

require_once 'src/Account.php';
require_once 'src/Holder.php';
require_once 'src/Employee.php';

$employee1 = new Employee("987.654.321-21","Robert",1500);
$holder1 = new Holder("123.123.123.12","Henrique","Seven st.");
$account1 = new Account($holder1, $employee1);

$employee2 = new Employee("354.123.562-61","Diego",2000);
$holder2 = new Holder("321.321.321.32","Felipe","Three st.");
$account2 = new Account($holder2, $employee2);

$account1->deposit(1200);
$account1->withdraw(860);

$account2->deposit(2000);

$account1->transfer(300, $account2);

echo $account1 . PHP_EOL . PHP_EOL;
echo $account2;