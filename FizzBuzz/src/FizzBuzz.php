<?php

class FizzBuzz {
    public function __construct()
    {

    }

    public function renderFizzBuzz(int $param){
        //if divisible by 3 return Fizz
        if ($param % 3 == 0){
            return 'Fizz';
        } elseif ($param % 5 == 0){ //if divisible by 5 return Buzz
            return 'Buzz';
        }
        else {
            return $param;
        }
    }
}
