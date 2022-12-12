<?php
include('../includes/db.php');
$sql = "SELECT * from driver";
if (!$con->query($sql)) {
    echo "Faied to create connection";
} else {
    $result = $con->query($sql); 
    if ($result->num_rows > 0) {
        $return_arr['driver'] = array();
        while ($row = $result->fetch_array()) {
            array_push($return_arr['driver'], array(
                'driver_id' => $row['reg']
            ));
        }
        echo json_encode($return_arr);
    }
}