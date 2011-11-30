<?php
/**
* @class FizzBuzz
*
* @author Dew Saosoong <dew@abctech-thailand.com>
*/
class FizzBuzz {
        
    function fizzbuzz($number) {
        $is_fizz     = ($number % 3) == 0 ? TRUE : FALSE;
        $is_buzz     = ($number % 5) == 0 ? TRUE : FALSE;
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
