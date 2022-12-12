<?php
include('../includes/db.php');//typed,quantity,category,company,reg,contact,country
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mpesa = test_input($_POST["mpesa"]);
    $amount = $_POST['amount'];
    $service = $_POST['service'];
    $cust_id = $_POST['cust_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $set_date=$_POST['set_date'];
    $date=date("Y-m-d");
    $room = date("Y");
    $per = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $newS = substr(str_shuffle($per), 0, 4);
    $naming = "/^[A-Z0-9]{10,}$/";
    $caps = "/^[A-Z]{10,}$/";
    $nums = "/^[0-9]{10,}$/";//mpesa,amount,service,cust_id,name,phone
    if(date(strtotime($date))>(strtotime($set_date))){
        $response["success"]=0;
        $response["message"]="Why is you date invalid?";
      }elseif(date(strtotime($set_date. ' - 1 days'))<(strtotime($date))){
        $response["success"]=0;
        $response["message"]="Allow a minimum of One day for proper arrangement";
      }else{
    if (preg_match($caps, $mpesa)) {
        $response["success"] = 0;
        $response["message"] = "Failed!! Your MPESA is invalid";
    } elseif (preg_match($nums, $mpesa)) {
        $response["success"] = 0;
        $response["message"] = "Oops!! Such MPESA code is invalid";
    } else {
        $select = "SELECT mpesa FROM payment WHERE mpesa='$mpesa'";
        $query = mysqli_query($con, $select);
        if (mysqli_num_rows($query) > 0) {
            $response["success"] = 0;
            $response["message"] = "MPESA code not accepted";
        } else {
        $select = "SELECT mpesa FROM service WHERE mpesa='$mpesa'";
        $query = mysqli_query($con, $select);
        if (mysqli_num_rows($query) > 0) {
            $response["success"] = 0;
            $response["message"] = "MPESA code not accepted";
        } else {
            $sql = "INSERT INTO service(mpesa,amount,service,cust_id,name,phone,set_date)
        VALUES('$mpesa','$amount','$service','$cust_id','$name','$phone','$set_date')";
            if (mysqli_query($con, $sql)) {
                $response["success"] = 1;
                $response["message"] = "Payment was successfully";
            } else {
                $response["success"] = 0;
                $response["message"] = "Failed to submit payment";
            }
        }
    }
}
}
echo json_encode($response);
mysqli_close($con);
}