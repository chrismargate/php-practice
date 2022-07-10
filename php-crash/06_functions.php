<?php

    function registerUser(){
        // in order to make the variable "x", a global variable
        global $x;
        $x = 12;
        echo "Register User";
    }

    function registerUser2($email){
        echo "$email registered";
    }

    function sum($n1,$n2){
        return $n1 + $n2;
    }
    
    // echo sum(1,2);

    // anonymous functions or lambdas
    $subtraction = function($n1,$n2){
        return $n1-$n2;
    };

    // shorter version of anonymous functions or lambdas
    $multiply = fn($n1,$n2) => $n1 * $n2;

    
?>