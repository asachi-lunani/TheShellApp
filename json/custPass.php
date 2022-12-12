<?php
include('../includes/db.php');
$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM customer WHERE email='$email'";
$response = mysqli_query($con, $sql);
if (mysqli_num_rows($response) === 1) {
    mysqli_query($con, "UPDATE customer set password='$password' where email='$email'");
    $row = mysqli_fetch_assoc($response);
    $result['success'] = 1;
    $result['message'] =  "Password Reset was successful";
    echo json_encode($result);
    mysqli_close($con);
} else {
    $result['success'] = 0;
    $result['message'] = "".$email." not Found";
    echo json_encode($result);
    mysqli_close($con);
}