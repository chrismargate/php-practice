<?php
    $fruits = ["apple","orange","pear"];

    // adds in the existing array
    $fruits[] = "grape";

    // in_array takes first argument as what to search for, takes second argument as the array
    // var_dump(in_array("apple",$fruits));

    // array_push takes the first argument as the array, takes second argument as the element to be inserted
    array_push($fruits,"blueberry");

    // array_unshift adds in the beginning
    array_unshift($fruits,"mango");

    //array_pop removes the element at the end
    array_pop($fruits);

    //array_shift removes the element at the beginning
    array_shift($fruits);

    // unset_removes the specific element in the indicated index
    unset($fruits[2]);

    // splits into 2, takes the first argument as the array to be split, takes the second argument as how many splits
    $chunked_array = array_chunk($fruits,2);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    // array_merge takes the first argument as the first array and second argument as the second array
    $arr3 = array_merge($arr1,$arr2);

    // merges the two (2) arrays
    $arr4 = [...$arr1,$arr2];
    
    $a = ["green","red","yellow"];
    $b = ["avocado","apple","banana"];

    // array_combine merges two (2) arrays and turns into key:value pair
    // takes the first argument as the keys and second argument as the values
    $c = array_combine($a,$b);

    // print_r($c);

    $keys = array_keys($c);

    $flipped = array_flip($c);

    $numbers = range(1,20);

    // works like the map function in python
    // takes the first argument as the function or anonymous/lambda function
    // takes the second argument as the array

    $newNumbers = array_map(function($number){
        return "Number ${number}";
    },$numbers);

    // array_filter works like the filter in python
    // takes the first argument as the array
    // takes the second argument as the function or anonymous/lambda function
    $lessThanTen = array_filter($numbers,fn($number) => $number % 2 == 0);

    print_r($lessThanTen);


    //array_reduce
    // takes the first argument as the array
    // takes the second argument as the function or anonymous/lambda function
    // function takes two (2) values as arguments $carry is the return value of the last iteration
    $sum = array_reduce($numbers, fn($carry,$number) => $carry + $number);

    var_dump($sum);

?>