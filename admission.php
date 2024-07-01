<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php require_once ("header.php"); ?>

    <?php
    if (isset($_GET['saved'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Admission has been taken.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    } else if (isset($_GET['failed'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> Admission Error.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
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
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="mobile" class="form-label">Mobile <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" id="mobile" placeholder="8901164933"
                                    name="mobile">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="parentmobile" class="form-label">Parent Mobile <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" id="parentmobile"
                                    placeholder="8901164933" name="parentmobile">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="email" class="form-label">Email address <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><input type="email" class="form-control" id="email"
                                    placeholder="Enter your email" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="street" class="form-label">Street Address <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><input type="text" class="form-control" id="street"
                                    placeholder="B1, B2 Basement Palika Complex" name="street"></div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3">
                                <label for="city" class="form-label">City <span class="required">*</span></label>

                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="city" placeholder="Rewari" name="city">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="state" class="form-label">State <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" id="state" placeholder="Haryana"
                                    name="state">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="pin" class="form-label">PIN Code <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><input type="text" class="form-control" id="pin" placeholder="123401"
                                    name="pin"></div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="aadhaar" class="form-label">Aadhaar Number <span
                                        class="required">*</span></label></div>
                            <div class="col-9"><input type="text" class="form-control" id="aadhaar"
                                    placeholder="000000000000" name="aadhaar"></div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-3"><label for="exam" class="form-label">Exam Preparing</label></div>
                            <div class="col-9"><input type="text" class="form-control" id="exam" placeholder="SSC"
                                    name="exam"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                            <h5 class="mt-4 mb-3">Select Profile Image</h5>
                            <div class="mb-3">
                                <label for="profileImage" class="form-label">Choose Profile Image</label>
                                <input type="file" class="form-control" id="profileImage" accept="image/*"
                                    name="profileimg">
                            </div>
                            <div class="mb-3">
                                <img alt="" id="imagePreview" class="profile-image">
                            </div>
                        </div>

                        <!-- second container  -->
                        <div class="container">
                            <h5 class="mt-4 mb-3">Select Aadhaar Front Image</h5>
                            <div class="mb-3">
                                <label for="aadhaarfront" class="form-label">Aadhaar Front</label>
                                <input type="file" class="form-control" id="aadhaarfront" accept="image/*"
                                    name="aadhaarfront">
                            </div>
                            <div class="mb-3">
                                <img alt="" id="aadhaarfrontPreview" class="profile-image">
                            </div>
                        </div>

                        <!-- third container -->
                        <div class="container">
                            <h5 class="mt-4 mb-3">Select Aadhaar Backside Image</h5>
                            <div class="mb-3">
                                <label for="aadhaarback" class="form-label">Choose Aadhaar BackSide Image</label>
                                <input type="file" class="form-control" id="aadhaarback" accept="image/*"
                                    name="aadhaarback">
                            </div>
                            <div class="mb-3">
                                <img alt="" id="aadhaarbackPreview" class="profile-image">
                            </div>
                        </div>

                    </div>


                </div>


                <!-- <div class="mb-3 row">
                <div class="col-2"><label for="message" class="form-label">Comment</label></div>
                <div class="col-10"><textarea class="form-control" id="message" rows="3"
                        placeholder="Enter your message"></textarea></div>
            </div> -->
                <button type="submit" class="btn btn-primary" name="admission">Submit</button>
            </form>
        </div>
    </div>
    </div>
    <script>
        function showImage(profileImage, imagePreview) {
            var fr = new FileReader();
            fr.onload = function (e) { imagePreview.src = this.result; };
            profileImage.addEventListener("change", function () {
                fr.readAsDataURL(profileImage.files[0]);
            });
        }

        var profileImage = document.getElementById("profileImage");
        var imagePreview = document.getElementById("imagePreview");
        showImage(profileImage, imagePreview);


        var aadhaarfront = document.getElementById("aadhaarfront");
        var aadhaarfrontPreview = document.getElementById("aadhaarfrontPreview");
        showImage(aadhaarfront, aadhaarfrontPreview);



        var aadhaarback = document.getElementById("aadhaarback");
        var aadhaarbackPreview = document.getElementById("aadhaarbackPreview");
        showImage(aadhaarback, aadhaarbackPreview);
    </script>


    <?php require_once ("footer.php"); ?>
<?php
} else {
    header('location:login.php?error=please login in first');
}
?>