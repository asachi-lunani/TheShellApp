<?php
include('../includes/db.php');

$sql = "CREATE TABLE orders(
    quote_id int auto_increment PRIMARY KEY,
    category varchar(250),
    typed varchar(250),
    quantity float,
    company varchar(250),
    reg varchar(250),
    contact varchar(250),
    country varchar(250),
    reg_date timestamp default current_timestamp 
    )";//typed,quantity,category,company,reg,contact,country
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "table created";
}
mysqli_close($con);