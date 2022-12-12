<?php
include('../includes/db.php');

$sql = "CREATE TABLE payment(
    payid int auto_increment PRIMARY KEY,
    serial varchar(50) default 'Pending',
    mpesa varchar(15),
    amount float,
    orders float,
    ship float,
    cust_id VARCHAR(50),
    name varchar(100),
    phone VARCHAR(20),
    mode varchar(50),
    location VARCHAR(250),
    status float default 0,
    driver varchar(50) default 'Pending',
    drive varchar(20) default 'Pending',
    customer varchar(20) default 'Pending',
    comment VARCHAR(250),
    reg_date timestamp default current_timestamp 
    )";//serial,mpesa,amount,orders,ship,cust_id,name,phone,mode,location,status,driver,drive,custome,reg_date
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "table created";
}
mysqli_close($con);