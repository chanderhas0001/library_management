<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php
    require_once ("header.php");
    require_once ("dao.php");
    ?>

    <?php
    if (isset($_GET['view'])) {
        $id = $_GET['view'];
        $row = selectById("student", "admission_id", "'$id'");
        // print_r($row);

    }
    ?>
    <div class="container-fluid">
        <h1 class="mt-4">Admission</h1>

        <div class="container">
            <form class="" method="post" enctype="multipart/form-data" action="admission_controller.php">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3 row">
                            <div class="col-3">
                                <label for="name" class="form-label">Name <span class="required">*</span></label>
                            </div>
                            <div class="col-9">
                                <label for="name" class="form-label"><?php echo $row['name']; ?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="mobile" class="form-label">Mobile <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-9">
                                <label class="form-label"><?php echo $row['mobile']; ?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="parentmobile" class="form-label">Parent Mobile <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-9"><label class="form-label"><?php echo $row['parentmobile']; ?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="email" class="form-label">Email address <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><label class="form-label"><?php echo $row['email']; ?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="street" class="form-label">Street Address <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><label class="form-label"><?php echo $row['street']; ?></label></div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3">
                                <label for="city" class="form-label">City <span class="required">*</span></label>

                            </div>
                            <div class="col-9">
                                <label class="form-label"><?php echo $row['city']; ?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="state" class="form-label">State <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-9"><label class="form-label"><?php echo $row['state']; ?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="pin" class="form-label">PIN Code <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><label class="form-label"><?php echo $row['pin']; ?></label></div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="aadhaar" class="form-label">Aadhaar Number <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><label class="form-label"><?php echo $row['aadhaar']; ?></label></div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="exam" class="form-label">Exam Preparing</label></div>
                            <div class="col-9"><label class="form-label"><?php echo $row['exam']; ?></label></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                            <h5 class="mt-4 mb-3">Select Profile Image</h5>
                            <div class="mb-3">
                                <img alt="" id="imagePreview" class="profile-image"
                                    src="<?php echo "uploads/" . $row['profile']; ?>">
                            </div>
                        </div>

                        <!-- second container  -->
                        <div class="container">
                            <h5 class="mt-4 mb-3">Aadhaar Front Image</h5>

                            <div class="mb-3">
                                <img alt="" id="imagePreview" class="profile-image"
                                    src="<?php echo "uploads/" . $row['aadhaarfront']; ?>">
                            </div>
                        </div>

                        <!-- third container -->
                        <div class="container">
                            <h5 class="mt-4 mb-3">Aadhaar Backside Image</h5>
                            <div class="mb-3">
                                <img alt="" id="imagePreview" class="profile-image"
                                    src="<?php echo "uploads/" . $row['aadhaarback']; ?>">
                            </div>
                        </div>

                    </div>


                </div>


                <!-- <div class="mb-3 row">
                <div class="col-2"><label for="message" class="form-label">Comment</label></div>
                <div class="col-10"><textarea class="form-control" id="message" rows="3"
                        placeholder="Enter your message"></textarea></div>
            </div> -->
                <a href="edit_admission.php?edit=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
            </form>
        </div>
    </div>
    </div>

    <?php require_once ("footer.php"); ?>
<?php
} else {
    header('location:login.php?error=please login in first');
}
?>