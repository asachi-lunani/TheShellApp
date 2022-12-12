<?php
include('../includes/db.php');

$sql = "CREATE TABLE purchses(
    id int auto_increment PRIMARY KEY,
    quote_id int,
    reg varchar(50),
    category varchar(250),
    type varchar(250),
    description VARCHAR(250),
    image varchar(250),
    quantity float,
    price float,
    status varchar(20) default 'Pending',
    reg_date timestamp default current_timestamp 
    )";
//id,quote_id,reg,category,type,description,image,quantity,price,status,reg_date
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "table created";
}
mysqli_close($con);