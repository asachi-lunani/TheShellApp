<?php

include('../includes/db.php');
$reg=$_POST['reg'];

$sql = "SELECT * from orders where quantity!='0' and reg='$reg'";

$response = mysqli_query($con, $sql);

if (mysqli_num_rows($response) > 0) {
    $results['trust'] = 1;
    $results['victory'] = array();//quote_id,category,typed,quantity,company,reg,contact,country,reg_date


    while ($row = mysqli_fetch_array($response)) {
        $index['quote_id'] = $row['quote_id'];
        $index['category'] = $row['category'];
        $index['typed'] = $row['typed'];
        $index['quantity'] = $row['quantity'];
        $index['company'] = $row['company'];
        $index['reg'] = $row['reg'];
        $index['contact'] = $row['contact'];
        $index['country'] = $row['country'];
        $index['reg_date'] = $row['reg_date'];
        array_push($results['victory'], $index);
    }
} else {

    $results['trust'] = 0;
    $results['mine'] = "No Product Record";
    echo json_encode($results);
}
echo json_encode($results);