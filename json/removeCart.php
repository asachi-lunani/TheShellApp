<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantity = $_POST["quantity"];
    $product = $_POST["product"];
    $reg = $_POST["reg"];
    $query = mysqli_query($con, "DELETE from cart where reg='$reg'");
    if ($query) {
        mysqli_query($con, "UPDATE product set quantity=(quantity+$quantity) where id='$product'");
        $response["success"] = 1;
        $response["message"] = "Item dropped successfully";
        echo json_encode($response);
        mysqli_close($con);
    } else {
        $response["success"] = 0;
        $response["message"] = " Failed to drop product";
        echo json_encode($response);
        mysqli_close($con);
    }
}