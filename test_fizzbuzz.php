<?php
/**
 * @class FizzBuzzTest
 *
 * @author Dew Saosoong <dew@abctech-thailand.com>
 */
require_once("fizzbuzz.php");

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->fizzbuzz = new FizzBuzz(0);
    }
    
    public function tearDown() {
        unset($this->fizzbuzz);
    }

    public function testFizzBuzz() {
        $result = $this->fizzbuzz->fizzbuzz(3);
        $expect = 'Fizz';
        $this->assertEquals($result, $expect);
                
        $result = $this->fizzbuzz->fizzbuzz(5);
        $expect = 'Buzz';
        $this->assertEquals($result, $expect);
                
        $result = $this->fizzbuzz->fizzbuzz(15);
        $expect = 'FizzBuzz';
        $this->assertEquals($result, $expect);
                
        $result = $this->fizzbuzz->fizzbuzz(1);
        $expect = 1;
        $this->assertEquals($result, $expect);
                
        $result = $this->fizzbuzz->fizzbuzz(11);
        $expect = 11;
        $this->assertEquals($result, $expect);
    }
}

?>
