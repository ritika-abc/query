<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
        <?php
            include "db.php";
            $id = $_GET['id'];
            $select = "SELECT * from `smriti_table` where `id`='$id'";
            $qu =mysqli_query($con,$select);
            while($row = mysqli_fetch_array($qu)){
          
            ?>
            <div class="col-8 ">
                <div class="row">
                    <div class="col-5">
                        <img src="<?php echo $row['image'] ?>" height="auto" width="100%" alt="">
                    </div>
                    <div class="col">
                        <h3><?php echo $row['name'] ?></h3>
                        <h4><?php echo $row['password'] ?></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est fugit cum assumenda possimus a dolor, reiciendis, velit suscipit dolorem, ea expedita itaque sequi eaque incidunt libero molestias ipsum dolorum fuga ipsa eius ducimus? Ducimus, maxime impedit facilis reprehenderit atque dolor?</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>