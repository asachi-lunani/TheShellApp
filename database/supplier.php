<?php
include('../includes/db.php');
$sql = "CREATE TABLE supplier(
    reg VARCHAR(50) PRIMARY KEY,
    fname varchar(50),
    lname varchar(50),
    email varchar(50),
    password varchar(250),
    company varchar(50),
    product varchar(50),
    country varchar(50),
    city varchar(50),
    contact VARCHAR(20),
    address VARCHAR(100),
    status varchar(50) default 'Pending',
    comment text,
    profile varchar(250),
    reg_date timestamp default current_timestamp 
)"; //reg,name,email,password,company,country,city,contact,address,status,comment,profile,reg_date
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "supplier table created successfully";
}
mysqli_close($con);