<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>
<?php

include "db.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // image
    //  $_FILES is a super global variable which can be used to upload files
    $image = $_FILES["image"]["name"];
    $fld1 = "upload/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["image"]['tmp_name'], $fld1);
    // tmp_name is the temporary name of the uploaded file which is generated automatically by php, and stored on the temporary folder on the server
    // Note: If the destination file already exists, it will be overwritten
    $sql = "INSERT INTO `smriti_table`( `name`,`password`,`image`)
     VALUES ('$name','$password','$fld1')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:select.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>






    <form action="" method="post" enctype="multipart/form-data">
        name : <input type="text" name="name"> <br>
        image : <input type="file" name="image"> <br>
        password : <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </form>
    <!-- <img src="upload/loading.gif" alt=""> -->

</body>

</html>