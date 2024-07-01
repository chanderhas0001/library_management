<?php
    
     require_once ("dao.php");
     require_once ("utility.php");



if (isset($_POST['edit_admission'])) {
 

 echo $profile=$_FILES["profileimg"]['name'];
 echo $profile=$_FILES["aadhaarfront"]['name'];
 echo $profile=$_FILES["aadhaarback"]['name'];

    if ($_FILES["profileimg"]['name'] = "") {
        $data['profile'] = uploadImage($_FILES["profileimg"], $admission_id);
    }
    if ($_FILES["aadhaarfront"]['name'] != "") {
        $data['aadhaarfront'] = uploadImage($_FILES["aadhaarfront"], "aadhaarfront" . $admission_id);
    }
    if ($_FILES["aadhaarback"]['name'] != "") {
        $data['aadhaarback'] = uploadImage($_FILES["aadhaarback"], "aadhaarback" . $admission_id);
    }
}
?>