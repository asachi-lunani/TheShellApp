<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $reply = $_POST["reply"];
    $sql="UPDATE rating set reply='$reply' where id='$id'";
            if (mysqli_query($con, $sql)) {
                $response["success"] = 1;
                $response["message"] = "Reply sent successfully";
                echo json_encode($response);
                mysqli_close($con);
            } else {
                $response["success"] = 0;
                $response["message"] = "Failed to send reply";
                echo json_encode($response);
                mysqli_close($con);
            }
        }