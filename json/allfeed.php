<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer=$_POST["customer"];
    $query = "SELECT * FROM rating where cust_id='$customer' order by reg_date asc";
    $response = mysqli_query($con, $query);
    if (mysqli_num_rows($response) > 0) {
        $results['trust'] = 1;//id,cust_id,phone,message,rating,senddate,reply, replydate,rating
        $results['victory'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $index['id'] = $row['id'];
            $index['customer'] = $row['cust_id'];
            $index['phone'] = $row['phone'];
            $index['name'] = $row['name'];
            $index['rating'] = $row['rating'];
            $index['message'] = $row['message'];
            $index['reg_date'] = $row['senddate'];
            $index['reply'] = $row['reply'];
            $index['reply_date'] = $row['replydate'];
            array_push($results['victory'], $index);
        }
    } else {
        $results['trust'] = 0;
        $results['mine'] = "No rating";
        echo json_encode($results);
    }
    echo json_encode($results);
}