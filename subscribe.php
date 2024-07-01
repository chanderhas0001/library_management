<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php require_once ("header.php"); ?>
    <?php require_once ("dao.php"); ?>

    <?php
    if (isset($_GET['saved'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Enquiry has been added.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    } else if (isset($_GET['failed'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> Enquiry has not been added.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
    }
    ?>


    <div class="container-fluid">
        <h1 class="mt-4">Subscribe</h1>
        <?php
        if (isset($_GET['admission_id'])) {
            $id = $_GET['admission_id'];
            $row = selectById("student", "admission_id", "'$id'");
            ?>
            <div class="container">
                <form action="subscribe_controller.php">
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="name" class="form-label">Name </label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                                value="<?php echo $row['name']; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="name" class="form-label">Admission Id </label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="admission_id"
                                value="<?php echo $row['admission_id']; ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="mobile" class="form-label">Mobile </label>
                        </div>
                        <div class="col-5"><input type="text" class="form-control" id="mobile" placeholder="8901164933"
                                value="<?php echo $row['mobile']; ?>" name="mobile" disabled></div>



                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="email" class="form-label">Email address </label></div>
                        <div class="col-5"><input type="email" class="form-control" id="email" placeholder="Enter your email"
                                value="<?php echo $row['email']; ?>" name="email" disabled>
                        </div>


                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="startdate" class="form-label">Start Date <span
                                    class="required">*</span></label>
                        </div>
                        <div class="col-5"><input type="date" class="form-control" id="startdate" placeholder="Rewari"
                                name="startdate" required></div>


                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="enddate" class="form-label">End Date <span
                                    class="required">*</span></label>
                        </div>
                        <div class="col-5"><input type="date" class="form-control" id="enddate" placeholder="Haryana"
                                name="enddate" required></div>


                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="feereceiveddate" class="form-label">Fee Received Date<span
                                    class="required">*</span></label>
                        </div>
                        <div class="col-5"><input type="date" class="form-control" id="feereceiveddate" placeholder="Haryana"
                                name="feereceiveddate" required></div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="amount" class="form-label">Amount Received <span
                                    class="required">*</span></label>
                        </div>
                        <div class="col-5"><input type="text" class="form-control" id="amount" placeholder="600" name="amount"
                                required></div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="status" class="form-label">Status <span class="required">*</span></label>
                        </div>
                        <div class="col-5">
                            <select name="status" id="">
                                <option value="1">Active</option>
                                <option value="0">Suspended</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2"><label for="status" class="form-label">Seat <span class="required">*</span></label>
                        </div>
                        <div class="col-5">
                            <select name="seatid" id="">
                                <option value="" disabled>Select Seat</option>
                                <?php
                                $rows = selectByCondition("seats", "admission_id='null'");
                                       
                                for ($i = 0; $i < count($rows); $i++) {
                                    ?>
                                    <option value="<?php echo $rows[$i]['seatid']; ?>"><?php echo $rows[$i]['seatid']; ?></option>
                                    <?php
                                }

                                ?>


                            </select>
                        </div>
                    </div>
                    <!-- <div class="mb-3 row">
                <label for="pin" class="form-label">PIN Code</label>
                <input type="text" class="form-control" id="pin" placeholder="123401">
            </div> -->
                    <button type="submit" class="btn btn-primary" name="subscribe">Submit</button>
                </form>
            </div>

            <?php
        }
        ?>
    </div>
    </div>

    <?php require_once ("footer.php"); ?>
<?php
} else {
    header('location:login.php?error=please login in first');
}
?>