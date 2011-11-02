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
    
    public function testGetRemainder() {
        $result = $this->fizzbuzz->get_remainder('Fizz', 3);
        $expect = 0;
        $this->assertEquals($result, $expect);
        
        $result = $this->fizzbuzz->get_remainder('Buzz', 5);
        $expect = 0;
        $this->assertEquals($result, $expect);
        
        $result = $this->fizzbuzz->get_remainder('Fizz', 15);
        $expect = 0;
        $this->assertEquals($result, $expect);        
        
        $result = $this->fizzbuzz->get_remainder('Buzz', 15);
        $expect = 0;
        $this->assertEquals($result, $expect);
        
        $result = $this->fizzbuzz->get_remainder('Fizz', 1);
        $expect = 1;
        $this->assertEquals($result, $expect);
        
        $result = $this->fizzbuzz->get_remainder('Buzz', 1);
        $expect = 1;
        $this->assertEquals($result, $expect);
    }
    
    public function testIsIt() {
        $result = $this->fizzbuzz->is_it('Fizz', 3);
        $this->assertTrue($result);
        
        $result = $this->fizzbuzz->is_it('Buzz', 5);
        $this->assertTrue($result);
        
        $result = $this->fizzbuzz->is_it('Fizz', 15);
        $this->assertTrue($result);
        
        $result = $this->fizzbuzz->is_it('Buzz', 15);
        $this->assertTrue($result);
        
        $result = $this->fizzbuzz->is_it('Fizz', 1);
        $this->assertFalse($result);
        
        $result = $this->fizzbuzz->is_it('Buzz', 1);
        $this->assertFalse($result);
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
    
    /**
     * @expectedException InvalidArgumentException
     *
     */
    public function testException() {
        $this->fizzbuzz->fizzbuzz('abc');
    }
}

?>
