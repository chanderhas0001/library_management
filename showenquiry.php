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
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Comment</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $table = "enquiry";
                $rows = selectAll($table);

                for ($i = 0; $i < count($rows); $i++) {
                    // print_r($rows[$i]['name']);
                    ?>
                    <tr>
                        <td><?php echo $rows[$i]['enq_id']; ?></td>
                        <td><?php echo $rows[$i]['name']; ?></td>
                        <td><?php echo $rows[$i]['mobile']; ?></td>
                        <td><?php echo $rows[$i]['email']; ?></td>
                        <td><?php echo $rows[$i]['city']; ?></td>
                        <td><?php echo $rows[$i]['state']; ?></td>
                        <td><?php echo $rows[$i]['comment']; ?></td>
                        <td><a href="edit_enquiry.php?edit=<?php echo $rows[$i]['enq_id']; ?>">Edit</a></td>
                        <td><a href="enquiry_controller.php?del=<?php echo $rows[$i]['enq_id']; ?>">Delete</a></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Comment</th>
                    <th>Edit</th>
                    <th>Delete</th>
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