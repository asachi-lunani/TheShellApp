<?php
include('../includes/db.php');
//reg,name,email,password,country,city,contact,address,status,comment,profile,reg_date
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $year = date("Y");
    $mon = date("M");
    $select = "SELECT email FROM driver WHERE email='$email'";
    $query = mysqli_query($con, $select);
    if (mysqli_num_rows($query) > 0) {
        $result["success"] = 0;
        $result["message"] = "Try a different email";
        echo json_encode($result);
        mysqli_close($con);
    } else {
        $select = "SELECT contact FROM driver WHERE contact='$contact'";
        $query = mysqli_query($con, $select);
        if (mysqli_num_rows($query) > 0) {
            $response["success"] = 0;
            $response["message"] = "Try a different Phone";
            echo json_encode($response);
            mysqli_close($con);
        } else {
            $count_my_page = ("../includes/serial.txt");
            $hits = file($count_my_page);
            $hits[0]++;
            $fp = fopen($count_my_page, "w");
            fputs($fp, "$hits[0]");
            fclose($fp);
            $values = $hits[0];
            $reg = $values . $year;
            $sql = "INSERT INTO driver(reg,fname,lname,email,password,country,city,contact,address)
    VALUES('$reg','$fname','$lname','$email','$password','$country','$city','$contact','$address')";
            if (mysqli_query($con, $sql)) {
                $response["success"] = 1;
                $response["message"] = "Account created";
                echo json_encode($response);
                mysqli_close($con);
            } else {
                $response["success"] = 0;
                $response["message"] = " An error occurred";
                echo json_encode($response);
                mysqli_close($con);
            }
        }
    }
}