<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "SELECT * FROM rating order by senddate desc";
    $response = mysqli_query($con, $query);
    if (mysqli_num_rows($response) > 0) {
        $results['trust'] = 1;
        $results['victory'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $index['id'] = $row['id'];
            $index['cust_id'] = $row['cust_id'];//$_20@22Sel@@@
            $index['name'] = $row['name'];
            $index['phone'] = $row['phone'];
            $index['message'] = $row['message'];
            $index['rating'] = $row['rating'];
            $index['senddate'] = $row['senddate'];
            $index['reply'] = $row['reply'];
            $index['replydate'] = $row['replydate'];
            array_push($results['victory'], $index);
        }//id,cust_id,name,phone,message,rating,senddate,reply, replydate
    } else {
        $results['trust'] = 0;
        $results['mine'] = "No composed messge";
        echo json_encode($results);
    }
    echo json_encode($results);
}