<?php 

require_once 'Calculator.php';
require_once 'Add.php';
require_once 'Division.php';

$calc = new Calculator(0);

echo $calc->calculate(2, new Division) . "<br />";
echo $calc->calculate(4, new Add) . "<br />";
echo $calc->calculate(4, new Add) . "<br />";