<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $query = mysqli_query($con, "UPDATE service set customer='Confirmed' where id='$id'");
    if ($query) {
        $response["success"] = 1;
        $response["message"] = "service updated successfully";
        echo json_encode($response);
        mysqli_close($con);
    } else {
        $response["success"] = 0;
        $response["message"] = "Failed to update service";
        echo json_encode($response);
        mysqli_close($con);
    }
}