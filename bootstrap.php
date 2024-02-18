<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
        <?php
            include "db.php";
            $select = "SELECT * from `smriti_table`";
            $qu =mysqli_query($con,$select);
            while($row = mysqli_fetch_array($qu)){
          
            ?>
            <div class="col-4 my-3">
            <a href="delete.php?id=<?php echo $row['id'];  ?>">
             delete</a>
                <img src="<?php echo $row['image'] ?>" height="300px" width="100%" alt="" srcset="">
                <h3><?php echo $row['name'] ?></h3>
                <p><?php echo $row['password'] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>