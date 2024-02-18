 <?php

    //  s n 2

    include "db.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $bla = $_POST['bla'];

        $sql = "SELECT  * from smriti_table  WHERE 
         name='$name' and password='$password'and 
         bla = '$bla' ";

        $emailresult = mysqli_query($con, $sql);

        $user_matched = mysqli_num_rows($emailresult);
        if ($user_matched > 0) {
            echo "you have already registered !!";
        } else {
            $insrt = mysqli_query($con, "INSERT INTO 
            `smriti_table`(`name`, `password`,`bla`) VALUES
             ('$name','$password','$bla')");

            if ($insrt) {
                header("location:login.php");
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
     <form action="" method="post" class=" w-75 m-auto mt-5">
         <label for=""> user name</label>
         <input type="text" class="form-control" name="name">


         <label for=""> password</label>
         <input type="password" class="form-control" name="password">
         <input type="text" class="form-control" name="bla">

         <input type="submit" name="submit">
     </form>
 </body>

 </html>


 </body>

 </html>