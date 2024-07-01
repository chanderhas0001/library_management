<?php

function uploadImage($file, $uploadFileName)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($file)) {
        if ($file["error"] == 0) {
            $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
            if (getimagesize($file["tmp_name"]) !== false) {
                $allowedFormats = array("jpg", "jpeg", "png", "gif");
                if (in_array($imageFileType, $allowedFormats)) {
                    $uploadFileName = $uploadFileName . "." . $imageFileType;
                    if (move_uploaded_file($file["tmp_name"], "uploads/" . $uploadFileName)) {
                        echo "Image uploaded successfully.";
                        return $uploadFileName;
                    } else {
                        echo "Error uploading image.";
                    }
                } else {
                    echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
                }
            } else {
                echo "Error: File is not an image.";
            }
        } else {
            echo "Error: " . $file["error"];
        }
    }
}

function checkSubscription($admission_id)
{
    $row = selectByCondition("subscriber", "admission_id = '$admission_id' and status=1");
    // print_r($row);
    if ($row) {
        return "btn-success";
    } else {
        return "btn-danger";
    }
}

?>