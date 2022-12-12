<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cust_id = $_POST["cust_id"];
    $phone = $_POST["phone"];
    $message = $_POST['comment'];
    $rating = $_POST['rate'];
    $name=$_POST['name'];
    $sql = "INSERT INTO rating(cust_id,phone,message,rating,name)
    VALUES('$cust_id','$phone','$message','$rating','$name')";
            if (mysqli_query($con, $sql)) {
                $response["success"] = 1;
                $response["message"] = "Message sent successfully";
                echo json_encode($response);
                mysqli_close($con);
            } else {
                $response["success"] = 0;
                $response["message"] = "Failed to send message";
                echo json_encode($response);
                mysqli_close($con);
            }
        }