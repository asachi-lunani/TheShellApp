<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['payId'];
        $cate = mysqli_query($con, "UPDATE payment set customer='Confirmed' where payid='$id'");
        if ($cate) {
            $response["success"] = 1;
            $response["message"] = "Update was sucessful";
            echo json_encode($response);
            mysqli_close($con);
        } else {
            $response["success"] = 0;
            $response["message"] = " Failed to update";
            echo json_encode($response);
            mysqli_close($con);
        }
    }