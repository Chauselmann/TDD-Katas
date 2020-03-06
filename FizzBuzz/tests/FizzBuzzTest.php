<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once(__DIR__ .'\..\src\FizzBuzz.php');


final class FizzBuzzTest extends TestCase
{
    public function testShouldReturnFizz(){
        $obj = new FizzBuzz();
        $this->assertTrue(($obj->renderFizzBuzz(3)) === 'Fizz', 'Should return Fizz when divisible by 3');
    }

    public function testShouldReturnBuzz(){
        $obj = new FizzBuzz();
        $this->assertTrue(($obj->renderFizzBuzz(5)) === 'Buzz', 'Should return Buzz when divisible by 5');
    }

    public function testShouldReturnFizzBuzz(){
        $obj = new FizzBuzz();
        $this->assertTrue(($obj->renderFizzBuzz(15)) === 'FizzBuzz', 'Should return FizzBuzz when divisible by 15');
    }
}