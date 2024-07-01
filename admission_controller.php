<?php
require_once ("dao.php");
require_once ("utility.php");



if (isset($_POST['admission'])) {

    $gsn = selectByMaxGsn("select max(gsn) as srno from student");
    $zero = 4 - strlen($gsn . "");
    $gsnAdm = str_repeat("0", $zero) . $gsn;


    $table = "student";
    $data = array();

    $admission_id = strtolower(substr($_POST['name'], 0, 3)) . $_POST['pin'] . $gsnAdm;

    $data['admission_id'] = $admission_id;
    $data['gsn'] = $gsn;
    $data['name'] = $name = $_POST['name'];
    $data['mobile'] = $mobile = $_POST['mobile'];
    $data['parentmobile'] = $mobile = $_POST['parentmobile'];
    $data['email'] = $email = $_POST['email'];
    $data['street'] = $street = $_POST['street'];
    $data['city'] = $city = $_POST['city'];
    $data['state'] = $state = $_POST['state'];
    $data['pin'] = $pin = $_POST['pin'];
    $data['aadhaar'] = $aadhaar = $_POST['aadhaar'];
    $data['exam'] = $exam = $_POST['exam'];

    $data['profile'] = uploadImage($_FILES["profileimg"], $admission_id);
    $data['aadhaarfront'] = uploadImage($_FILES["aadhaarfront"], "aadhaarfront" . $admission_id);
    $data['aadhaarback'] = uploadImage($_FILES["aadhaarback"], "aadhaarback" . $admission_id);

    echo $table;
    print_r($data);
    if (insert($table, $data)) {
        // echo "success";
        header("location:showadmission.php?saved='success'");
    } else {
        // echo "fail";
        header("location:showadmission.php?failed='error'");
    }



}

if (isset($_POST['edit_admission'])) {
    echo $admission_id = $_POST['admission_id'];
    $data['name'] = $name = $_POST['name'];
    $data['mobile'] = $mobile = $_POST['mobile'];
    $data['parentmobile'] = $mobile = $_POST['parentmobile'];
    $data['email'] = $email = $_POST['email'];
    $data['street'] = $street = $_POST['street'];
    $data['city'] = $city = $_POST['city'];
    $data['state'] = $state = $_POST['state'];
    $data['pin'] = $pin = $_POST['pin'];
    $data['aadhaar'] = $aadhaar = $_POST['aadhaar'];
    $data['exam'] = $exam = $_POST['exam'];

$profile=$_FILES["profileimg"]['name'];

    if ($_FILES["profileimg"]['name'] != "") {
        $data['profile'] = uploadImage($_FILES["profileimg"], $admission_id);
    }
    if ($_FILES["aadhaarfront"]['name'] != "") {
        $data['aadhaarfront'] = uploadImage($_FILES["aadhaarfront"], "aadhaarfront" . $admission_id);
    }
    if ($_FILES["aadhaarback"]['name'] != "") {
        $data['aadhaarback'] = uploadImage($_FILES["aadhaarback"], "aadhaarback" . $admission_id);
    }



    // if (update("student", $data, "admission_id='$admission_id'")) {
    //     header("location:showadmission.php?saved='success'");
    //     // echo "success";
    // } else {
    //     header("location:showadmission.php?failed='error'");
    //     // echo "fail";
    // }
}


if (isset($_GET['del'])) {
    $id = $_GET['del'];
    if (deleteRecord("student", "admission_id='$id'")) {
        header("location:showadmission.php?saved='success'");
    } else {
        header("location:showadmission.php?failed='error'");
    }
}

?>