<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST["comment"];
    $id = $_POST["id"];
    $status = $_POST["status"];
    $query = mysqli_query($con, "UPDATE service set status='$status',comment='$comment' where id='$id'");
    if ($query) {
        $response["success"] = 1;
        $response["message"] = "service updated successfully";
        echo json_encode($response);
        mysqli_close($con);
    } else {
        $response["success"] = 0;
        $response["message"] = "Failed to update payment";
        echo json_encode($response);
        mysqli_close($con);
    }
}