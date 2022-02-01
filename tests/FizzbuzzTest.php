<?php

    use App\Fizzbuzz;
    use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class FizzbuzzTest extends TestCase {

        protected function setUp(): void {
            $this->fizzbuzz = new Fizzbuzz();
        }

        public function testReturn1IfNumberIs1() {
            assertEquals("1", $this->fizzbuzz->generate(1));
        }

        public function testReturn2IfNumberIs2() {
            assertEquals("2", $this->fizzbuzz->generate(2));
        }

        public function testReturnFizzIfNumberIs3() {
            assertEquals("Fizz", $this->fizzbuzz->generate(3));
        }

        public function testReturnFizzIfNumberIs6() {
            assertEquals("Fizz", $this->fizzbuzz->generate(6));
        } 
        
        public function testReturnBuzzIfNumberIs5() {
            assertEquals("Buzz", $this->fizzbuzz->generate(5));
        } 

        public function testReturnBuzzIfNumberIs10() {
            assertEquals("Buzz", $this->fizzbuzz->generate(10));
        } 

        public function testReturnFizzbuzzIfNumberIs15() {
            assertEquals("FizzBuzz", $this->fizzbuzz->generate(15));
        } 

        public function testReturnFizzbuzzIfNumberIs30() {
            assertEquals("FizzBuzz", $this->fizzbuzz->generate(30));
        } 

        public function testReturn12IfNumberBetween1And2() {
            assertEquals("12", $this->fizzbuzz->generate(1, 2));
        } 

        public function testReturn12FizzIfNumberBetween1And3() {
            assertEquals("12Fizz", $this->fizzbuzz->generate(1, 3));
        } 

        public function testReturn12Fizz4BuzzIfNumberBetween1And5() {
            assertEquals("12Fizz4Buzz", $this->fizzbuzz->generate(1, 5));
        } 

        public function testReturn12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzzIfNumberBetween1And5() {
            assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", $this->fizzbuzz->generate(1, 15));
        } 

    }

?>