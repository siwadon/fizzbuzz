<?php
require_once("fizzbuzz.php");

$fizzbuzz = new FizzBuzz(0);

foreach (range(1,100) as $number) {
    echo $fizzbuzz->fizzbuzz($number) . "\n";
}

?>
