<?php

    // to be able to use newlines in echo and treat text as plain text
    // header("Content-type: text/plain");

/* FOR LOOPS
    for($x = 0; $x <= 10; $x++){
        echo "Number: $x";
    }

*/

/* WHILE LOOPS
    $x = 1;
    while($x <= 10){
        echo "Number: $x";
       $x++; 
    }
*/

/* DO WHILE LOOPS
    $x = 1;
    do{
        echo "Number: $x";
        $x++;
    }while($x <= 10)
*/

    $posts = ["First Post", "Second Post", "Third Post"];

    foreach($posts as $post) {
        echo "$post <br>";
    }

?>