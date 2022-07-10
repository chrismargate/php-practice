<?php
    $name = "Chris";
    $age = 22;
    $hasKids = false;

    $cashOnHand = 20.75;

    // one way of printing variables in an echo
    echo $name . ' is ' . $age . ' years old';

    // another way of printing variables in an echo
    echo "$name is $age years old";

    // another way of printing variables in an echo 
    echo "${name} is ${age} years old";

    // does not treat as string
    $x = '5' + '5';
    var_dump($x);

    // for constants first argument passed is the variable name and the second is the value
    define('HOST','localhost');
    define('DBNAME',"dev_deb");

    echo DBNAME;
?>