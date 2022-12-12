<?php

include('../includes/db.php');

$sql = "SELECT * from supplier where status='Approved'";

$response = mysqli_query($con, $sql);

if (mysqli_num_rows($response) > 0) {
    $results['trust'] = 1;
    $results['victory'] = array();

    //reg,name,email,company,product,country,city,contact,address//availSup
    while ($row = mysqli_fetch_array($response)) {
            $index['reg'] = $row['reg'];
            $index['name'] = $row['fname'].' '.$row['lname'];
            $index['email'] = $row['email'];
            $index['company'] = $row['company'];
            $index['product'] = $row['product'];
            $index['country'] = $row['country'];
            $index['city'] = $row['city'];
            $index['contact'] = $row['contact'];
            $index['address'] = $row['address'];
        array_push($results['victory'], $index);
    }
} else {

    $results['trust'] = 0;
    $results['mine'] = "No suplier found";
    echo json_encode($results);
}
echo json_encode($results);