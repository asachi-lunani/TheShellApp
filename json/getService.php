<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "SELECT * FROM service order by status asc";
    $response = mysqli_query($con, $query);
    if (mysqli_num_rows($response) > 0) {
        $results['trust'] = 1;
        $results['victory'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $index['id'] = $row['id'];
            $index['mpesa'] = $row['mpesa'];
            $index['amount'] = $row['amount'];
            $index['service'] = $row['service'];
            $index['cust_id'] = $row['cust_id'];
            $index['name'] = $row['name'];
            $index['phone'] = $row['phone'];
            $index['set_date'] = $row['set_date'];
            if ($row['status'] == 0) {
                $index['status'] = 'Pending';
            } elseif ($row['status'] == 1) {
                $index['status'] = 'Approved';
            } else {
                $index['status'] = 'Rejected';
            }
            $index['manager'] = $row['manager'];
            $index['customer'] = $row['customer'];
            $index['comment'] = $row['comment'];
            $index['reg_date'] = $row['reg_date'];
            array_push($results['victory'], $index);
            //payid,vs,mpesa,amount,orders,ship,cust_id,name,phone,mode,location,status,driver,drive,customer,comment,reg_date
        }
    } else {
        $results['trust'] = 0;
        $results['mine'] = "No Payment Record";
        echo json_encode($results);
    }
    echo json_encode($results);
}