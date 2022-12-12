<?php
include('../includes/db.php');

$sql = "CREATE TABLE cart(
    reg int auto_increment PRIMARY KEY,
    serial varchar(50) default 'Pending',
    customer VARCHAR(20),
    product int,
    category VARCHAR(250),
    type varchar(50),
    price float,
    quantity float,
    image VARCHAR(250),
    status varchar(20) default 'Pending',
    reg_date timestamp default current_timestamp 
    )";//serial,customer,product,category,type,price,quantity,image,status,reg_date
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "table created";
}
mysqli_close($con);