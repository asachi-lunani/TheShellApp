<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $customer = $_POST['cust_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $quant = $_POST['quant'];
    if ($quantity > $quant) {
        $response["success"] = 9;
        $response["message"] = "Your quantity is too high";
        echo json_encode($response);
    } else {
        $select = "SELECT * FROM cart WHERE product='$product' and category='$category' and type='$type' and status='Pending' and serial='Pending' and customer='$customer'";
        $query = mysqli_query($con, $select);
        if (mysqli_num_rows($query) > 0) {
            $update = mysqli_query($con, "UPDATE cart set quantity=(quantity+'$quantity') where product='$product' and category='$category' and type='$type' and status='Pending' and serial='Pending' and customer='$customer'");
            if ($update) {
                $updat = "UPDATE product set quantity=(quantity-$quantity) where id='$product'";
                if (mysqli_query($con, $updat)) {
                    $response["success"] = 1;
                    $response["message"] = "Cart updated successfully";
                    echo json_encode($response);
                    mysqli_close($con);
                } else {
                    $response["success"] = 0;
                    $response["message"] = " Operation failed ";
                    echo json_encode($response);
                    mysqli_close($con);
                }
            }
        } else {
            $image = mysqli_query($con, "SELECT image as img from product where id='$product'");
            $photo = mysqli_fetch_assoc($image);
            $sql = "INSERT INTO cart(customer,product,category,type,price,quantity,image)
    VALUES('$customer','$product','$category','$type','$price','$quantity','$photo[img]')";
            if (mysqli_query($con, $sql)) {
                $nes = mysqli_query($con, "UPDATE product set quantity=(quantity-$quantity) where id='$product'");
                if ($nes) {
                    $response["success"] = 1;
                    $response["message"] = "Product insert was successful";
                    echo json_encode($response);
                    mysqli_close($con);
                } else {
                    $response["success"] = 0;
                    $response["message"] = "Could not insert cart";
                    echo json_encode($response);
                    mysqli_close($con);
                }
            } else {
                $response["success"] = 0;
                $response["message"] = "An error Occurred";
                echo json_encode($response);
                mysqli_close($con);
            }
        }
    }
}