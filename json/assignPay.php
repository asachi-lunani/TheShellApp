<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $driver = $_POST["driver"];
    $payid = $_POST["payid"];
    $query = mysqli_query($con, "UPDATE payment set driver='$driver' where payid='$payid'");
    if ($query) {
        $response["success"] = 1;
        $response["message"] = "Attachment was successfully";
        echo json_encode($response);
        mysqli_close($con);
    } else {
        $response["success"] = 0;
        $response["message"] = "Failed to attach driver";
        echo json_encode($response);
        mysqli_close($con);
    }
}