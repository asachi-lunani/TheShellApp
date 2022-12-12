<?php

include('../includes/db.php');

$sql = "SELECT * from purchses where status='Pending'";

$response = mysqli_query($con, $sql);

if (mysqli_num_rows($response) > 0) {
    $results['trust'] = 1;
    $results['victory'] = array();
//id,quote_id,reg,category,type,description,image,quantity,price,status,reg_date//uploadedProd
    while ($row = mysqli_fetch_array($response)) {
        $index['id'] = $row['id'];
        $index['quote_id'] = $row['quote_id'];
        $index['reg'] = $row['reg'];
        $index['category'] = $row['category'];
        $index['type'] = $row['type'];
        $index['description'] = $row['description'];
        $index['image'] = $row['image'];
        $index['quantity'] = $row['quantity'];
        $index['price'] = $row['price'];
        $index['status'] = $row['status'];
        $index['reg_date'] = $row['reg_date'];
        array_push($results['victory'], $index);
    }
} else {

    $results['trust'] = 0;
    $results['mine'] = "No Product Record";
    echo json_encode($results);
}
echo json_encode($results);