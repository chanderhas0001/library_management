<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php
    require_once ("header.php");
    require_once ("dao.php");
    ?>
    <?php
    if (isset($_GET['saved'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Enquiry has been updated.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    } else if (isset($_GET['failed'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> Enquiry has not updated.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
    }
    ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>SubId</th>
                    <th>AdmissionId</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>FeesReceivedDate</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $table = "subscriber";
                $admission_id = $_GET['admission_id'];
                // $rows = selectAll($table);
                $rows = selectByCondition("subscriber", "admission_id = '$admission_id'");

                for ($i = 0; $i < count($rows); $i++) {
                    // print_r($rows[$i]['name']);
                    ?>
                    <tr>
                        <td><?php echo $rows[$i]['subid']; ?></td>
                        <td><?php echo $rows[$i]['admission_id']; ?></td>
                        <td><?php echo $rows[$i]['startdate']; ?></td>
                        <td><?php echo $rows[$i]['enddate']; ?></td>
                        <td><?php echo $rows[$i]['feereceiveddate']; ?></td>
                        <td><?php echo $rows[$i]['amount']; ?></td>
                        <td><?php echo $rows[$i]['status']; ?></td>
                        <!-- <td><a href="edit_enquiry.php?edit=<?php echo $rows[$i]['id']; ?>">Edit</a></td>
                    <td><a href="enquiry_controller.php?del=<?php echo $rows[$i]['id']; ?>">Delete</a></td> -->

                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>SubId</th>
                    <th>AdmissionId</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>FeesReceivedDate</th>
                    <th>Amount</th>
                    <th>Status</th>
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