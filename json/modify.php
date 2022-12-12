<?php
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quota = $_POST["quota"];//quota,quantity,product,reg
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
    $reg = $_POST["reg"];
    $image = mysqli_query($con, "SELECT quantity as img from product where id='$product'");
    $photo = mysqli_fetch_assoc($image);
    $older=round((($photo['img'])+$quantity),0);
    if($quota>$older){
        $response["status"] = 0;
        $response["message"] = "Please Reduce Your quantity";
        echo json_encode($response);
    }else{
        $new=round(($older-$quota),0);
        $sql1=mysqli_query($con, "UPDATE cart set quantity='$quota' where reg='$reg'");
        $sql2=mysqli_query($con, "UPDATE product set quantity='$new' where id='$product'");
        if($sql1 & $sql2){
            $response["status"] = 1;
            $response["message"] = "Cart update was successful";
        }else {
            $response["status"] = 0;
            $response["message"] = " Failed to update cart";
        }
    }
    echo json_encode($response);
    mysqli_close($con);
}