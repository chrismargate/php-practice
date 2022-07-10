<?php
    if(isset($_POST['submit'])){
        echo $_POST["name"];
        echo $_POST["age"];
    }
?>

<!-- <a href="?name=Chris&age=22">Click</a> -->

<!-- DEFAULTS METHOD TO GET-->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>