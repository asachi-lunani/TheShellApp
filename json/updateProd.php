<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//category,type,image,quantity,price
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];//id,category,type,description,quantity,price
    $description = $_POST['description'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $tag=$_POST["tag"];
    if($tag>$price){
         $response["success"] = 0;
            $response["message"] = " Price tag cannot be lower than supplier price";
            echo json_encode($response);
    }else{
    $image = mysqli_query($con, "SELECT image as img from purchses where id='$id'");
            $photo = mysqli_fetch_assoc($image);
        $cate = mysqli_query($con, "UPDATE purchses set status='Approved' where id='$id'");
        if ($cate) {//id,category,type,image,quantity,price,reg_date
            $select = mysqli_query($con, "SELECT * from product where category='$category' and type='$type' and price='$price'");
             if (mysqli_num_rows($select) > 0) {
        $cate = mysqli_query($con, "UPDATE product set qty=(qty+$quantity),quantity=(quantity+$quantity),image='$photo[img]' where category='$category' and type='$type' and price='$price'");
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
    } else {
        $sql = "INSERT INTO product(category,type,description,image,qty,quantity,price)
        VALUES('$category','$type','$description','$photo[img]','$quantity','$quantity','$price')";
        if (mysqli_query($con, $sql)) {
            $response["success"] = 1;
            $response["message"] = "Succesful";
            echo json_encode($response);
            mysqli_close($con);
        } else {
            $response["success"] = 0;
            $response["message"] = "  Failed to upload post";
            echo json_encode($response);
            mysqli_close($con);
        }
    }
}
}}