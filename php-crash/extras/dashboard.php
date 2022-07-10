<?php
    session_start();

    if(isset($_SESSION["username"])){
        echo "<h1>Welcome back ${_SESSION["username"]}!</h1>";
        echo '<a href="logout.php">Logout</a>';
    }else {
        echo "<h1>Welcome Guest!</h1>";
        $htmlBackTag = '<a href="/php-crash/13_sessions.php">Go back</a>';
        echo $htmlBackTag;
    }
?>