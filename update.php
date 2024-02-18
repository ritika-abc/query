 <?php
    $con = mysqli_connect("localhost", "root", "", "smriti");

    $id = $_GET['id'];

    $sql = "SELECT* FROM `smriti_table` WHERE `id`='$id'";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($query)) {
        # to select all the data
        $name = $row['name'];
        $password = $row['password'];
        $image = $row['image'];
    }

    ?>
 <?php

    //  update
    $con = mysqli_connect("localhost", "root", "", "smriti");
    if (isset($_POST['submit'])) {

        $id = $_GET['id'];

        $name = $_POST['name'];
        $password = $_POST['password'];

    // image
    //  $_FILES is a super global variable which can be used to upload files
    $image = $_FILES["image"]["name"];
    $fld1 = "upload/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["image"]['tmp_name'], $fld1);

     if($image == ""){
        $sql1 = "UPDATE `smriti_table` SET `name`='$name',`password`='
        $password' WHERE `id`='$id'";
            $query1 = mysqli_query($con, $sql1) or die( "dgdgdfgdfg");
            // The die() function prints a message and exits the current script
            if ($query) {
                header("location:select.php");
            }
     }else{
        $sql1 = "UPDATE `smriti_table` SET `name`='$name',`password`='
        $password',`image`='$fld1' WHERE `id`='$id'";
            $query1 = mysqli_query($con, $sql1) or die( "dgdgdfgdfg");
            // The die() function prints a message and exits the current script
            if ($query) {
                header("location:select.php");
            }
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
         name : <input type="text" value="<?php echo $name ?>" name="name"> <br>
         password : <input type="password" value="<?php echo $password ?>" name="password"> <br>
         image : <input type="file" value="<?php echo $image ?>" name="image"> <br>
         <input type="submit" name="submit">

     </form>
 </body>

 </html>