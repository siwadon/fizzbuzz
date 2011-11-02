<?php
/**
 * @class FizzBuzz
 *
 * @author Dew Saosoong <dew@abctech-thailand.com>
 */

define('Fizz', 3);
define('Buzz', 5);

class FizzBuzz {
    private $is_fizz        = FALSE;
    private $is_buzz        = FALSE;
    private $is_fizzbuzz    = FALSE;
    
    function get_remainder($word, $number) {
        $divisor = constant($word);
        $remainder = $number % $divisor;
        
        return $remainder;
    }
    
    function is_it($word, $number) {
        if (self::get_remainder($word, $number) == 0) {
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
        else {        
            $is_fizz        = self::is_it('Fizz', $number);
            $is_buzz        = self::is_it('Buzz', $number);
            $is_fizzbuzz    = $is_fizz & $is_buzz;
            
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
}
?>
