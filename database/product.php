<?php
include('../includes/db.php');

$sql = "CREATE TABLE product(
    id int auto_increment PRIMARY KEY,
    category varchar(250),
    type varchar(250),
    description VARCHAR(250),
    image varchar(250),
    qty float,
    quantity float,
    price float,
    reg_date timestamp default current_timestamp 
    )";//category,type,description,image,qty,quantity,price,reg_date
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "table created";
}
mysqli_close($con);