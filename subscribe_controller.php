<?php
require_once ("dao.php");
if (isset($_GET['subscribe'])) {
    // $data
    $table = "subscriber";
    $data = array();
    $data['admission_id'] = $name = $_GET['admission_id'];
    $data['startdate'] = $mobile = $_GET['startdate'];
    $data['enddate'] = $email = $_GET['enddate'];
    $data['feereceiveddate'] = $email = $_GET['feereceiveddate'];
    $data['amount'] = $email = $_GET['amount'];
    $data['status'] = $email = $_GET['status'];
    $data['seat'] = $email = $_GET['seatid'];

    if (insert($table, $data)) {

        $data_seat = array();
        $seatid = $_GET['seatid'];
        $data_seat['admission_id'] = $_GET['admission_id'];

        if (update("seats", $data_seat, "seatid=$seatid")) {
            echo "Seat Reserved";
            header("location:showadmission.php?saved='Seat Alloted'");
        } else {
            echo "Seat Reserved Error";
            header("location:showadmission.php?failed='Error'");
        }
    } else {
        header("location:showadmission.php?failed='Error'");
    }
}


if(isset($_GET['subid'])){
    $subid=$_GET['subid'];
     $admission_id=$_GET['admission_id'];

    $query="update seats set admission_id=NULL where seatid=(select seatid from seats where admission_id='$admission_id')";
    $result=runAnyQuery($query);
    if($result){
        $seatUpdateQuery="update subscriber set status=0 where subid=$subid";
        $seatUpdateResult=runAnyQuery($seatUpdateQuery);
        if($seatUpdateResult){
            echo "Sucess";
        }else{
            echo "subscriber update error";
        }
    }else{
        echo "seat update error";
    }
}
?>