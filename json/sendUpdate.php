<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST["comment"];
    $payid = $_POST["payid"];
    $status = $_POST["status"];
    $query = mysqli_query($con, "UPDATE payment set status='$status',comment='$comment' where payid='$payid'");
    if ($query) {
        $response["success"] = 1;
        $response["message"] = "Payment updated successfully";
        echo json_encode($response);
        mysqli_close($con);
    } else {
        $response["success"] = 0;
        $response["message"] = "Failed to update payment";
        echo json_encode($response);
        mysqli_close($con);
    }
}