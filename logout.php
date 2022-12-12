<?php

session_start();
unset($_SESSION['adminadmin']);

echo "<script>window.open('login.php','_self')</script>";