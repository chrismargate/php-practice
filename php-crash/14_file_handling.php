<?php
    /*
    File Handling is the ability to read and write files on the server.
    PHP has built in functions for reading and writing files.
    */
    $file = 'extras/users.txt';

    if(file_exists($file)){
        // echo readfile($file);
        $handle = fopen($file, "r");
        $contents = fread($handle,filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, "w");

        // PHP_EOL used to add a new line on the file
        $contents = "Chris" . PHP_EOL . "Jemma" . PHP_EOL . "Jam";
        fwrite($handle,$contents);
        fclose($handle);
    }

?>