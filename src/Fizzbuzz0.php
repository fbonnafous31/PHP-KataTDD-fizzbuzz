<?php

    namespace App;

    class Fizzbuzz0 {

        public function generate(int $value): string { 
            $result = null;           
            if ($value%3 == 0) {
                $result = "Fizz";        
            }
            if ($value%5 == 0) {
                $result .= "Buzz";
            }
            return isset($result) ? ucfirst(strtolower($result)) : strval($value);
        }

    }

?>