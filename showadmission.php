<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php
    require_once ("header.php");
    require_once ("dao.php");
    require_once ("utility.php");
    ?>
    <?php
    if (isset($_GET['saved'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Admission has been updated.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    } else if (isset($_GET['failed'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> Admission has not updated.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
    }





    ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>profile</th>
                    <th>admission_id</th>
                   
                    <th>city</th>
                    <th>aadhaarfront</th>
                    <th>aadhaarback</th>
                    <th>view</th>
                    <th>edit</th>
                    <th>delete</th>
                
                    <th>Subscription</th>
                    <th>View&nbsp;All&nbsp;Sub.</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                $table = "student";
             
                $rows=fetchAll(runAnyQuery("select * from student order by gsn desc"));

                for ($i = 0; $i < count($rows); $i++) {
                    // print_r($rows[$i]['name']);
                    ?>
                    <tr>
                        <td>
                            <h5><?php echo $rows[$i]['name']; ?></h5>
                            <img src="uploads/<?php echo $rows[$i]['profile']; ?>" alt="" width="70">
                        </td>
                        <td>
                            <?php echo $rows[$i]['admission_id']; ?>
                            <?php
                            $subscribe = "";
                            $subscribe = checkSubscription($rows[$i]['admission_id']);
                            ?>
                        </td>
                        <!-- <td>
                            <?php echo $rows[$i]['mobile']; ?>
                        </td> -->
                        <!-- <td>
                        <?php echo $rows[$i]['parentmobile']; ?>
                    </td> -->
                        <td>
                            <?php echo $rows[$i]['city']; ?>
                        </td>
                        <td>
                            <img src="uploads/<?php echo $rows[$i]['aadhaarfront']; ?>" alt="" width="70">
                        </td>
                        <td>
                            <img src="uploads/<?php echo $rows[$i]['aadhaarback']; ?>" alt="" width="70">

                        </td>
                        <td><a href="viewprofile.php?view=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn btn-primary">View</a></td>
                        <td><a href="edit_admission.php?edit=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn btn-warning">Edit</a></td>
                        <td><a href="admission_controller.php?del=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn btn-danger">Delete</a></td>
                        <td>
                            <a href="subscribe.php?admission_id=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn <?php echo $subscribe; ?>">Subscribe</a>
                        </td>
                        <td>
                            <a href="view_subscribe_profile.php?admission_id=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn btn-info">All_Sub</a>
                        </td>
                    


                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>profile</th>
                    <th>admission_id</th>
                 
                    <th>city</th>
                    <th>aadhaarfront</th>
                    <th>aadhaarback</th>
                    <th>view</th>
                    <th>edit</th>
                    <th>delete</th>
               
                    <th>Subscription</th>
                    <th>View&nbsp;All&nbsp;Sub.</th>
                </tr>
            </tfoot>
        </table>
    </div>


    <?php require_once ("footer.php"); ?>
<?php
} else {
    header('location:login.php?error=please login in first');
}
?>