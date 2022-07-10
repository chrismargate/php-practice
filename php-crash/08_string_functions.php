<?php

    $sampleString = "Hello World";
    // Get the lenght of a string
    echo strlen($sampleString);

    // Find the position of the first occurrence of a substring in a string
    echo strpos($sampleString,'o');

    // Find the position of the last occurrence of a subtring in a string
    echo strrpos($sampleString, 'o');

    // Reverse a string
    echo strrev($sampleString);

    // Convert all characters to lowercase
    echo strtolower($sampleString);

    // Convert all characters to uppercase
    echo strtoupper($sampleString);

    // Uppercase the first character of each word
    echo ucwords($sampleString);

    // String replace
    echo str_replace('World','Everyone',$sampleString);

    // Return portion of a string specified by the offset and length
    echo substr($sampleString,0,5);
    echo substr($sampleString,5);
    
    // Stars with
    if (str_starts_with($sampleString,"Hello")){
        echo "YES";
    }

    // Ends with
    if (str_ends_with($sampleString,"World")){
        echo "YES";
    }

    $string2 = "<script>alert(1)</script>";
    // echo htmlspecialchars($string2);

    // printf("%s likes to %s", "Chris","Code");
    // printf()
?>