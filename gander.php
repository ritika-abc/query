<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>welcome </h1>
    <table class="table table-bordered text-capitalize table-hover table-light w-75 m-auto">
        <tr>
            <td>s no</td>
            <td>gander</td>
            <td>message</td>

            <td>update</td>
            
        </tr>
        <?php
        include "db.php";
        $select = "SELECT * from `rad`";
        $qu = mysqli_query($con, $select);
        $s_no = 1;
        while ($row = mysqli_fetch_array($qu)) {
        ?>
            <tr>
                <td><?php echo $s_no ?></td>
                <td><?php echo $row['gander'] ?></td>
                <td><?php echo $row['message'] ?></td>
                <td><a href="up.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            </tr>
        <?php $s_no++;
        } ?>
    </table>

</body>

</html>





<!--   <textarea class="form-control" name="remarks" rows="3" placeholder="Enter ..."> ?php echo htmlspecialchars($remarks); ?></textarea> -->