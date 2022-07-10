<?php
/*
    $age = 20;

    if($age >= 18){
        echo "You are old enough to vote";
    } else {
        echo "Sorry, you are not old enough to vote";
    }
*/
    // date arguments = "F" for current month of the year
    // date arguments = "H" for current hour of the day
    // date arguments = "j" for current day of the month

    /*
    $t = date("H");

    echo $t;

    if($t < 12){
        echo "Good Morning!";
    } elseif ($t < 17 ) {
        echo "Good Afternoon!";
    } else {
        echo "Good Evening!";
    }
*/
    
    // empty() can be used to check if a variable is empty


    $favcolor = "red";

    switch($favcolor) {
        case "red":
            echo "Your favorite color is red";
            break;
        case "blue":
            echo "Your favorite color is blue";
            break;
        case "green":
            echo "Your favorite color is green";
            break;
        default:
            echo "Your favorite color is not red, blue or green";
    }

?>