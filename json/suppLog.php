<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM supplier WHERE email='$email' AND password='$password' ";
    $response = mysqli_query($con, $sql);
    if (mysqli_num_rows($response) === 1) {
        $row = mysqli_fetch_array($response);
        if ($row['status'] == 'Pending') {
            $result['success'] = "0";
            $result['message'] = "Please wait for approval";
            echo json_encode($result);
        } elseif ($row['status'] == 'Rejected') {
            $result = array();
            $result['login'] = array();
            $index['comment'] = $row['comment'];
            $result['success'] = "2";
            $result['message'] = "You Account has been Deactivated";
            array_push($result['login'], $index);
            echo json_encode($result);
        } else {
            $result = array(); //reg,name,email,password,country,city,contact,address,status,comment,profile,reg_date
            $result['login'] = array();
            $index['reg'] = $row['reg'];
            $index['fname'] = $row['fname'];
            $index['lname'] = $row['lname'];
            $index['email'] = $row['email'];
            $index['company'] = $row['company'];
            $index['product'] = $row['product'];
            $index['country'] = $row['country'];
            $index['city'] = $row['city'];
            $index['contact'] = $row['contact'];
            $index['address'] = $row['address'];
            $index['status'] = $row['status'];
            $index['reg_date'] = $row['reg_date'];
            array_push($result['login'], $index);
            $result['success'] = "1";
            $result['message'] = "Login was successful";
            echo json_encode($result);
            mysqli_close($con);
        }
    } else {
        $result['success'] = "0";
        $result['message'] = "Either your Email or password is wrong";
        echo json_encode($result);
        mysqli_close($con);
    }
}