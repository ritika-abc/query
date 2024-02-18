<?php
$con = mysqli_connect("localhost","root","","smriti");
 
$id = $_GET['id'];
$del = "DELETE FROM `smriti_table` WHERE `id`='$id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:select.php");
}
