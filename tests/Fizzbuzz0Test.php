<?php

    use App\Fizzbuzz0;
    use PHPUnit\Framework\TestCase;
    use function PHPUnit\Framework\assertEquals;

    class Fizzbuzz0Test extends TestCase {

        protected function setUp(): void {
            $this->fizzbuzz = new Fizzbuzz0();
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
            assertEquals("Fizzbuzz", $this->fizzbuzz->generate(15));
        } 

        public function testReturnFizzbuzzIfNumberIs30() {
            assertEquals("Fizzbuzz", $this->fizzbuzz->generate(30));
        } 

    }

?>