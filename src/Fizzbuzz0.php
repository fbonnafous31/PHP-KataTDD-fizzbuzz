<?php

    namespace App;

    class Fizzbuzz0 {

        public function generate(int $value): string { 
            if ($value%3 == 0) {
                $result = "Fizz";        
            }
            if ($value%5 == 0) {
                $result .= "Buzz";
            }

            if (is_null($result)) {
                return strval($value);
            }
            return ucfirst(strtolower($result));
        }

    }

?>