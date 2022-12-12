<?php
include('../includes/db.php');//typed,quantity,category,company,reg,contact,country
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $company = $_POST['company'];
    $reg = $_POST['reg'];
    $contact = $_POST['contact'];
    $country = $_POST['country'];
    $select = mysqli_query($con, "SELECT * from orders where category='$category' and typed='$type' and reg='$reg'");
    if (mysqli_num_rows($select) > 0) {
        $cate = mysqli_query($con, "UPDATE orders set quantity=(quantity+$quantity) where category='$category' and typed='$type' and reg='$reg'");
        if ($cate) {
            $response["success"] = 1;
            $response["message"] = "  update was succesful";

            echo json_encode($response);
            mysqli_close($con);
        } else {
            $response["success"] = 0;
            $response["message"] = " Failed to update";

            echo json_encode($response);
            mysqli_close($con);
        }
    } else {
        $sql = "INSERT INTO orders(typed,quantity,category,company,reg,contact,country)
        VALUES('$type','$quantity','$category','$company','$reg','$contact','$country')";
        if (mysqli_query($con, $sql)) {
            $response["success"] = 1;
            $response["message"] = "  Order posted succesfully";

            echo json_encode($response);
            mysqli_close($con);
        } else {
            $response["success"] = 0;
            $response["message"] = "  Failed to post order";

            echo json_encode($response);
            mysqli_close($con);
        }
    }
}