<?php

require 'Calc.php';
use Problem3AlexandrAnatoliev\Calc;

$calc   = new Calc();
$answer = $calc->getMaxPrimeDiv(600851475143, 2);
echo 'Answer: ' . $answer;
