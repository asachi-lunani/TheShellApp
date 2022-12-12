<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reg = $_POST["reg"];
    $query = "SELECT * FROM driver WHERE reg='$reg'";

    $response = mysqli_query($con, $query);

    if (mysqli_num_rows($response) > 0) {
        $results['trust'] = 1;
        $results['victory'] = array();
      //fname,lname,email,country,city,contact,address
        while ($row = mysqli_fetch_array($response)) {
            $index['fname'] = $row['fname'];
            $index['lname'] = $row['lname'];
            $index['email'] = $row['email'];
            $index['country'] = $row['country'];
            $index['city'] = $row['city'];
            $index['contact'] = $row['contact'];
            $index['address'] = $row['address'];
            array_push($results['victory'], $index);
        }
    } else {

        $results['trust'] = 0;
        $results['mine'] = "No such Driver";
        echo json_encode($results);
    }
    echo json_encode($results);
}