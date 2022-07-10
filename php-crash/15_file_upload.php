<?php
    if(isset($_POST["submit"])){
        if(!empty($_FILES["upload"]["name"])){
            $allowed_ext = array("png","jpg","jpeg","gif","txt");

            $file_name = $_FILES["upload"]["name"];
            $file_size = $_FILES["upload"]["size"];
            $file_tmp = $_FILES["upload"]["tmp_name"];
            $target_dir = "uploads/${file_name}";

            // Get file extension
            $file_ext = explode('.',$file_name);   
            $file_ext = strtolower(end($file_ext));
            
            // validate file extension
            if(in_array($file_ext,$allowed_ext)){
                if($file_size <= 1000000){
                    move_uploaded_file($file_tmp,$target_dir);
                    $message = '<p style="color: green;">File Uploaded!</p>';
                } else{
                    $message = '<p style="color: red;">The file is too large!</p>';
                }
            } else{
                $message = '<p style="color: red;">Invalid file type!</p>';
            }

        } else{
            $message = '<p style="color: red;">Please choose a file</p>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>    
    </head>
    <body>
        <?php echo $message ?? null; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            Select image to upload:
            <br>
            <input type="file" name="upload">
            <br>
            <input type="submit" name="submit">
            <br>
            <!-- <div>
                <label for="username">Username: </label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Submit" name="submit"> -->
        </form>
    </body>
</html>