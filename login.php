 
<?php

// 
session_start();
ob_start();
include "db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $bla = $_POST['bla'];

    $result = mysqli_query($con, "select * 
     from smriti_table WHERE name='$name' and password='$password'and bla='$bla'");
    $user_matched = mysqli_num_rows($result);
    if ($user_matched > 0) {
        $_SESSION['password'] = $password;
        
              
        header("location:select.php");
    } else {
        echo "not matched !!!!";
    }
}
?>
<div class="row">
    <div class="col-12  ">
        <form action="" method="post" class="border p-5 w-75 m-auto text-capitalize">
            <label for=""> user name</label>
            <input type="text" class="form-control" name="name">
            <label for="" class="mt-3"> password</label>
            <input type="password" class="form-control" name="password">
            <input type="text" class="form-control" name="bla">

            <input type="submit" name="submit" class="btn btn-danger mt-3">
            <a href="logout.php">logout here</a>
        </form>
    </div>
</div>