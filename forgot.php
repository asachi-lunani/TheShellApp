<?php
error_reporting(E_ERROR);

include("includes/db.php");
//reg,name,email,password,role,country,city,contact,address,status,comment,profile,reg_date
if (isset($_POST['admin_login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $rpassword = md5($_POST['rpassword']);
    if ($rpassword != $password) {
        $notify = 'error';
        $show = 'Your Passwords do not match';
        header("refresh:1;url=forgot");
    } else {
        $find = "SELECT * FROM staff WHERE role='Admin' and email='" . $email . "'";
        $tour = mysqli_query($con, $find);
        $getter = mysqli_num_rows($tour);
        if ($getter > 0) {
            $query = "UPDATE staff set password='$password' where role='Admin' and email='$email'";
            $result = mysqli_query($con, $query);
            if (!$result) {
                die("Connection failed: " . $con->connect_error);
                exit;
            } else {
                $notify = 'error';
                $show = 'Password reset successfuly';
                header("refresh:1;url=login");
            }
        } else {
            $notify = 'error';
            $show = 'Account not found';
            header("refresh:1;url=forgot");
        }
    }
}

?>
<!DOCTYPE HTML>
<html>

<head>

    <title>Admin Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/login.css">
    <script src="css/custom-sweeralert.js"></script>

</head>

<body>
    <?php
    if ($notify == 'error') {
        echo '<script>
    	    swal("","' . $show . '");
    	    </script>';
    }
    ?>
    <div class="container">
        <!-- container Starts -->
        <form class="form-login" action="" method="post">
            <!-- form-login Starts -->

            <h2 class="form-login-heading">The Royal Dutch Shell Admin Reset Password</h2>

            <input type="text" class="form-control" name="email" placeholder="Email Address"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required style="font-size:16px" maxlength="49" />

            <input type="password" class="form-control" name="password" placeholder="Password"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required style="font-size:16px" maxlength="15" minlength="6" />

            <input type="password" class="form-control" name="rpassword" placeholder="Retype Password"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required style="font-size:16px" maxlength="15" minlength="6" />

            <button class="btn btn-lg btn-success btn-block" type="submit" name="admin_login">

                Reset Password

            </button><br>
            <a href="login" style="text-decoration: dotted;">

                back</a>


        </form>


    </div>



</body>

</html>