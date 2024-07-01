<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <!-- all current subscibed users data -->
    <?php
    require_once ("header.php");
    require_once ("dao.php");
    ?>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>View</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Fees Received Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $table = "subscriber";
                // $rows = selectAll($table);
                $rows = selectByCondition($table, "status=0");

                for ($i = 0; $i < count($rows); $i++) {
                    // print_r($rows[$i]['name']);
                    ?>
                    <tr>
                       
                        <td><a href="viewprofile.php?view=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn btn-primary">View</a></td>
                        <td><?php echo $rows[$i]['admission_id']; ?></td>
                        <td><?php echo $rows[$i]['startdate']; ?></td>
                        <td><?php echo $rows[$i]['enddate']; ?></td>
                        <td><?php echo $rows[$i]['feereceiveddate']; ?></td>
                        <td><?php echo $rows[$i]['amount']; ?></td>
                       
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>View</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Fees Received Date</th>
                    <th>Amount</th>
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