<?php
include('../includes/db.php');

$sql = "CREATE TABLE rating(
    id int auto_increment PRIMARY KEY,
    cust_id varchar(50),
    name varchar(100),
    phone VARCHAR(20),
    message VARCHAR(250),
    rating float,
    senddate timestamp default current_timestamp,
    reply varchar(250) default 'Pending',
    replydate timestamp default current_timestamp on update current_timestamp
    )";//id,cust_id,phone,message,rating,senddate,reply, replydate,rating
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection failed: " . $con->connect_error);
} else {//cust_id,message,senddate
    echo "table created";
}
mysqli_close($con);