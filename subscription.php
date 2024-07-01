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
                    <th>Admission</th>
                    <th>Seat</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Fees RDate</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $table = "subscriber";
                // $rows = selectAll($table);
                $rows = selectByCondition($table, "status=1");
                $cur_date = date('Y-m-d');

                for ($i = 0; $i < count($rows); $i++) {
                    // print_r($rows[$i]['name']);
                    ?>
                    <tr>
                        <!-- <td><?php echo $rows[$i]['subid']; ?></td> -->
                        <td><a href="viewprofile.php?view=<?php echo $rows[$i]['admission_id']; ?>"
                                class="btn btn-primary">View</a></td>
                        <td><?php echo $admission_id = $rows[$i]['admission_id']; ?></td>
                        <td><?php


                        $row_seats = fetch(runAnyQuery("select * from seats where admission_id='$admission_id'"));
                        echo $row_seats['seatid'];

                        ?></td>
                        <td>
                            <?php
                            $row_student = fetch(runAnyQuery("select * from student where admission_id='$admission_id'"));
                            echo $row_student['name'];
                            ?>
                        </td>
                        <td><?php echo $rows[$i]['startdate']; ?></td>


                        <?php
                        $status = "btn-success";
                        if ($cur_date > $rows[$i]['enddate']) {
                            $status = "btn-danger";
                        }
                        ?>
                        <td><button class="btn <?php echo $status; ?>"><?php echo $rows[$i]['enddate']; ?></button></td>
                        <td><?php echo $rows[$i]['feereceiveddate']; ?></td>
                        <td><?php echo $rows[$i]['amount']; ?></td>
                        <!-- <td><?php echo $rows[$i]['status']; ?></td> -->
                        <!-- <td><a href="edit_enquiry.php?edit=<?php echo $rows[$i]['id']; ?>">Edit</a></td>
                    <td><a href="enquiry_controller.php?del=<?php echo $rows[$i]['id']; ?>">Delete</a></td> -->
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>View</th>
                    <th>Admission</th>
                    <th>Seat</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Fees RDate</th>
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