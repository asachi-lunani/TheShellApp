<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//category,type,image,quantity,price
    $id = $_POST['id'];
        $cate = mysqli_query($con, "UPDATE purchses set status='Rejected' where id='$id'");
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