<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php require_once ("header.php"); ?>

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
        <h1 class="mt-4">Enquiry</h1>

        <div class="container">
            <form action="enquiry_controller.php">
                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="name" class="form-label">Name <span class="required">*</span></label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                            required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-2"><label for="mobile" class="form-label">Mobile <span class="required">*</span></label>
                    </div>
                    <div class="col-10"><input type="text" class="form-control" id="mobile" placeholder="8901164933"
                            name="mobile" required></div>



                </div>
                <div class="mb-3 row">
                    <div class="col-2"><label for="email" class="form-label">Email address <span
                                class="required">*</span></label></div>
                    <div class="col-10"><input type="email" class="form-control" id="email" placeholder="Enter your email"
                            name="email">
                    </div>


                </div>
                <!-- <div class="mb-3 row">
                <label for="street" class="form-label">Street Address <span class="required">*</span></label>
                <input type="text" class="form-control" id="street" placeholder="B1, B2 Basement Palika Complex">
            </div> -->
                <div class="mb-3 row">
                    <div class="col-2"><label for="city" class="form-label">City <span class="required">*</span></label>
                    </div>
                    <div class="col-10"><input type="text" class="form-control" id="city" placeholder="Rewari" name="city"
                            required></div>


                </div>
                <div class="mb-3 row">
                    <div class="col-2"><label for="state" class="form-label">State <span class="required">*</span></label>
                    </div>
                    <div class="col-10"><input type="text" class="form-control" id="state" placeholder="Haryana"
                            name="state" required></div>


                </div>
                <!-- <div class="mb-3 row">
                <label for="pin" class="form-label">PIN Code</label>
                <input type="text" class="form-control" id="pin" placeholder="123401">
            </div> -->
                <div class="mb-3 row">
                    <div class="col-2"><label for="message" class="form-label">Comment</label></div>
                    <div class="col-10"><textarea class="form-control" id="message" rows="3"
                            placeholder="Enter your message" name="comment"></textarea></div>


                </div>
                <button type="submit" class="btn btn-primary" name="enquiry">Submit</button>
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