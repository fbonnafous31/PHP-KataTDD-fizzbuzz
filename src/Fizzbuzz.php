<?php

    namespace App;

    class Fizzbuzz {

        public function generate(int $minvalue, int $maxValue=null): string {            
            return $this->evaluateNumbers($minvalue, $maxValue);
        }

        private function evaluateNumbers(int $minvalue, int $maxValue=null) {
            $result = $this->evaluateNumber($minvalue);
            while ($minvalue < $maxValue){
                $minvalue +=1;
                $result .= $this->evaluateNumber($minvalue);        
            }
            return $result;
        }

        private function evaluateNumber(int $value): string {
            if ($value%15 == 0) {
                return "FizzBuzz";
            } elseif ($value%3 == 0) {
                return "Fizz";        
            } elseif ($value%5 == 0) {
                return "Buzz";
            } else {
                return strval($value);
            }  
        }

    }

?>