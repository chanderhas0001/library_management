
   
   
   
   
   
   
   
   
   <?php require_once ("header.php"); ?>
    <?php require_once ("dao.php"); ?>

    <?php
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $row = selectById("student", "admission_id", "'$id'");
    }
    ?>
    <div class="container-fluid">
        <h1 class="mt-4">Admission</h1>

        <div class="container">
            <form class="" method="post" enctype="multipart/form-data" action="test_controller.php">
                <div class="row">
                 
                    <div class="col-4">
                        <div class="container">
                            <h5 class="mt-4 mb-3">Select Profile Image</h5>
                            <div class="mb-3">
                                <label for="profileImage" class="form-label">Choose Profile Image</label>
                                <input type="file" class="form-control" id="profileImage" accept="image/*"
                                    name="profileimg">
                            </div>
                            <div class="mb-3">
                                <img alt="" id="imagePreview" class="profile-image"
                                    src="uploads/<?php echo $row['profile']; ?>">
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
                                <img alt="" id="aadhaarfrontPreview" class="profile-image"
                                    src="uploads/<?php echo $row['aadhaarfront']; ?>">
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
                                <img alt="" id="aadhaarbackPreview" class="profile-image"
                                    src="uploads/<?php echo $row['aadhaarback']; ?>">
                            </div>
                        </div>

                    </div>


                </div>


                <!-- <div class="mb-3 row">
                <div class="col-2"><label for="message" class="form-label">Comment</label></div>
                <div class="col-10"><textarea class="form-control" id="message" rows="3"
                        placeholder="Enter your message"></textarea></div>
            </div> -->
                <button type="submit" class="btn btn-primary" name="edit_admission">Submit</button>
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
