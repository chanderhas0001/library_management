<?php
require_once ("dao.php");
if (isset($_GET['enquiry'])) {
    // $data

    $table = "enquiry";
    $data = array();

    $data['name'] = $name = $_GET['name'];
    $data['mobile'] = $mobile = $_GET['mobile'];
    $data['email'] = $email = $_GET['email'];
    $data['city'] = $city = $_GET['city'];
    $data['state'] = $state = $_GET['state'];
    $data['comment'] = $comment = $_GET['comment'];

    if (insert($table, $data)) {
        header("location:enquiry.php?saved='success'");
    } else {
        header("location:enquiry.php?failed='error'");
    }

}

if (isset($_GET['update'])) {
    // $data

    $table = "enquiry";
    $data = array();

    $data['name'] = $_GET['name'];
    $data['mobile'] = $_GET['mobile'];
    $data['email'] = $_GET['email'];
    $data['city'] = $_GET['city'];
    $data['state'] = $_GET['state'];
    $data['comment'] = $_GET['comment'];



    $id = $_GET['edit'];

    if (update($table, $data, "enq_id=$id")) {
        header("location:showenquiry.php?saved='success'");
    } else {
        header("location:showenquiry.php?failed='error'");
    }

}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    if (deleteRecord("enquiry", "enq_id=$id")) {
        header("location:showenquiry.php?saved='success'");
    } else {
        header("location:showenquiry.php?failed='error'");
    }
}

?>