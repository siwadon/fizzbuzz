<?php
/**
* @class FizzBuzz
*
* @author Dew Saosoong <dew@abctech-thailand.com>
*/

define('Fizz', 3);
define('Buzz', 5);

class FizzBuzz {

    /**
     * Calculate and return the remainder from the division of input $number by
     * 3 if $word is Fizz, or 5 if $word is Buzz
     * 
     * @param string $word 'Fizz' or 'Buzz'
     * @param integer $number input number
     * @return integer
     */
    function get_remainder($word, $number) {
        $divisor   = constant($word);
        $remainder = $number % $divisor;
        
        return $remainder;
    }
    
    /**
     * Call get_remainder() and then return TRUE if remainder is equal to zero,
     * or return FALSE if not.
     * 
     * @param string $word 'Fizz' or 'Buzz'
     * @param integer $number input number
     * @return bool return TRUE if remainder is equal to zero, or FALSE if not.
     */
    function is_it($word, $number) {        
        $remainder = self::get_remainder($word, $number);
    
        if ($remainder == 0) {
            $result = TRUE;
        }
        else {
            $result = FALSE;
        }
        
        return $result;
    }
    
    /**
     * Check input $number and return 
     *   'FizzBuzz' if $number can divide by 3 and 5
     *   'Fizz'     if $number can divide by 3
     *   'Buzz'     if $number can divide by 5
     *   $number    if $number cannot divide by 3 nor 5
     * 
     * @param integer $number input number
     * @return string
     */    
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
