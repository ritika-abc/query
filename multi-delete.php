  <form action="delete-limit-buyleads.php"  method="post">
                            
                                <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th> ID</th>
                                        <th> Action</th>
                                         
                                        <th>User Email</th>
                                        <th>Query For </th>
                                        <th>Number </th>
                                        <th>Date</th>
                                       
                                        <th>Location</th>
                                        <th>Plan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $sel = "SELECT * FROM `limit_buylead`   ORDER BY limit_id DESC  ";
                                    $q = mysqli_query($con, $sel);
                                    $sno = 1;
                                    while ($row = mysqli_fetch_array($q)) {
                                        $date = new DateTime($row['date']);
                                        $go = $date->format("F j, Y");
                                        $limit_id = $row['limit_id'];
                                    ?>

                                        <tr>
                                            <td>#<?php echo $row['user_id'] ?></td>
                                            <td>
                                                <small>
                                                  
                                                    <div class="d-flex order-actions">
                                                          <input type="checkbox" name="limit_id[]" value="<?php echo $limit_id ?>">
                                                    <p><?php echo $limit_id ?></p>
                                                    <!-- <a href="delete-user.php?user_id=<?php echo $row['user_id'] ?>" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a> -->
                                                       
                                                    </div>
                                                </small>
                                            </td>
                                             
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14"><?php echo $row['user_email'] ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row['queiry_for'] ?></td>
                                            <td><?php echo $row['number'] ?></td>
                                            <td><?php echo $go ?></td>
                                             
                                            <td><?php echo $row['buyer_location'] ?></td>
                                            <td><?php echo $row['plan'] ?></td>
                                            



                                        </tr>
                                    <?php $sno++;
                                    } ?>
                                </tbody>
                            </table>
                            <input type="submit" name="submit" value="Delete" class="btn btn-danger mb-3">
                        </form>

















// delete page

<?php
 include "include/config.php";
if (!isset($con)) {
    die("Database connection failed. Please check config.php");
}



if (isset($_POST['submit'])) {

    if (!empty($_POST['limit_id'])) {

        $limit_id = $_POST['limit_id'];
        $ids_list = implode(",", array_map('intval', $limit_id));

        $query = "DELETE FROM limit_buylead WHERE limit_id IN ($ids_list)";
       $abc =  mysqli_query($con, $query);

        if($abc){
header('location:view-limit-buyleads.php');
        }
        echo "Selected records deleted successfully!";
    } else {
         
        echo "No records selected.";
    }
}
?>
