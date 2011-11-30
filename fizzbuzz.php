<?php
/**
* @class FizzBuzz
*
* @author Dew Saosoong <dew@abctech-thailand.com>
*/
class FizzBuzz {

    function is_it($word, $number) {
        if ($word == 'Fizz') {
            $divisor = 3;
        }
        else if ($word == 'Buzz') {
            $divisor = 5;
        }
        
        $remainder = $number % $divisor;
    
        if ($remainder == 0) {
            $result = TRUE;
        }
        else {
            $result = FALSE;
        }
        
        return $result;
    }
        
    function fizzbuzz($number) {
            
        if (!is_numeric($number) || !is_int($number)) {
            throw new InvalidArgumentException("It isn't an integer number");
        }
        
        $is_fizz     = self::is_it('Fizz', $number);
        $is_buzz     = self::is_it('Buzz', $number);
        $is_fizzbuzz = $is_fizz && $is_buzz;
        
        if ($is_fizzbuzz) {
            $result = 'FizzBuzz';
        }
        else if ($is_fizz) {
            $result = 'Fizz';
        }
        else if ($is_buzz) {
            $result = 'Buzz';
        }
        else {
            $result = $number;
        }
        
        return $result;
    }
}
?>
