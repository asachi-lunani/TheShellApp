<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $payid = $_POST["payId"];
    $query = mysqli_query($con, "UPDATE payment set drive='Confirmed' where payid='$payid'");
    if ($query) {
        $response["success"] = 1;
        $response["message"] = "Confirmation was successfully";
        echo json_encode($response);
        mysqli_close($con);
    } else {
        $response["success"] = 0;
        $response["message"] = "Failed to Confirm shipment";
        echo json_encode($response);
        mysqli_close($con);
    }
}