<?php
require_once("fizzbuzz.php");

$fizzbuzz = new FizzBuzz();

foreach (range(1,100) as $number) {
    echo $fizzbuzz->calculate($number) . "\n";
}

?>
