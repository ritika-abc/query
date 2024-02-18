<?php
$con = mysqli_connect("localhost", "root", "", "smriti");

$id = $_GET['id'];

$sql = "SELECT* FROM `rad` WHERE `id`='$id'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
    # to select all the data
    $gander = $row['gander'];
    $message = $row['message'];
}

?>
<?php

//  update
$con = mysqli_connect("localhost", "root", "", "smriti");
if (isset($_POST['submit'])) {

    $id = $_GET['id'];

    $gander = $_POST['gander'];
    $message = $_POST['message'];




    $sql1 = "UPDATE `rad` SET `gander`='$gander',`message`='$message' WHERE `id`='$id'";
    $query1 = mysqli_query($con, $sql1) ;
    
    if ($query) {
        header("location:gander.php");
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
    <form action="" method="post"> 
        <textarea name="message" id="" cols="30" rows="10"><?php echo htmlspecialchars($message)?></textarea>
        <input type="radio" name="gander" value="Male" <?php echo ($gander == 'Male') ? 'checked' : ''; ?> /> male<br />
           <input type="radio" name="gander" value="Female" <?php echo ($gander == 'Female') ? 'checked' : ''; ?> /> famel<br />
            <input type="submit" name="submit">
        </div>
    </form>
</body>

</html>