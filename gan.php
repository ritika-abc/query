<?php

include "db.php";
if (isset($_POST['submit'])) {
  
    $gander = $_POST['gander'];
    $message = $_POST['message'];
 
    $sql = "INSERT INTO `rad`(`message`,`gander`)
     VALUES ('$message','$gander')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:gander.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <div class="form-select">
      <textarea name="message" id="" cols="30" rows="10"></textarea>
        <label for=""> Gander</label>
        <input type="radio" value="Male" name="gander">
        <input type="radio" value="Female" name="gander">
        <input type="submit" name="submit">
    </div>

</form>
</body>
</html>
