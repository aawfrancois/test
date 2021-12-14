<?php

require_once('Calculator.php');

$calc = new Calculator();

echo $calc->seven()->plus()->one();
echo $calc->nine()->minus()->nine();
echo $calc->two()->times()->two()->times()->zero();
echo $calc->eight()->dividedInto()->two()->dividedInto()->two();
echo $calc->six()->dividedInto()->two()->times()->two();

