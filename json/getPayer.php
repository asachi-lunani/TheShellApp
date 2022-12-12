<?php
include('../includes/db.php');
$cust_id = $_POST['cust_id'];
$query = "SELECT * FROM cart WHERE customer='$cust_id' and status='Pending'";
$response = mysqli_query($con, $query);
if (mysqli_num_rows($response) > 0) {
    $cool = mysqli_query($con, "SELECT SUM(quantity*price) as orders from cart where customer='$cust_id' and status='Pending'");
    $total = mysqli_fetch_assoc($cool);
    $results['trust'] = 1;
    $results['victory'] = array();
    $index['orders'] = $total['orders'];
    $index['shipping'] = '280';
    $index['total'] = $total['orders'] + 280;
    array_push($results['victory'], $index);
    echo json_encode($results);
} else {
    $results['trust'] = 0;
    $results['mine'] = "No items";
    echo json_encode($results);
}