<?php

class FizzBuzz {
    public function __construct()
    {

    }

    public function renderFizzBuzz(int $param){
        if ($param % 3 == 0){
            return 'Fizz';
        } else {
            return $param;
        }
    }
}
