<?php
include('../includes/db.php');

$sql = "CREATE TABLE service(
    id int auto_increment PRIMARY KEY,
    mpesa varchar(15),
    amount float,
    service varchar(250),
    cust_id VARCHAR(50),
    name varchar(100),
    phone VARCHAR(20),
    set_date varchar(100),
    status float default 0,
    manager varchar(50) default 'Pending',
    customer varchar(20) default 'Pending',
    comment VARCHAR(250),
    reg_date timestamp default current_timestamp 
    )";//mpesa,amount,service,cust_id,name,phone,status,manager,customer,reg_date
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "table created";
}
mysqli_close($con);