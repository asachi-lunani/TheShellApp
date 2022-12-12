<?php
error_reporting(E_ERROR);

include("includes/db.php");
//reg,name,email,password,role,country,city,contact,address,status,comment,profile,reg_date

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['admin_reg'])) {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $role = 'Admin';
    $contact = test_input($_POST["contact"]);
    $password = md5($_POST['password']);
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phonex = "/^[0-9]{10,13}$/";
    $naming = "/^[a-zA-Z]{2,}$/";
    $mail = "/^[a-z0-9._%+-]+@gmail+\.[a-z]{2,4}$/";
    $mail2 = "/^[a-z0-9._%+-]+@yahoo+\.[a-z]{2,4}$/";
    if (!preg_match($mail, $email) & !preg_match($mail2, $email)) {
        $notify = 'error';
        $show = 'Enter a valid email';
    } elseif (!preg_match($phonex, $contact)) {
        $notify = 'error';
        $show = 'Please enter a valid contact';
    } else {
        $count_my_page = ("includes/serial.txt");
        $hits = file($count_my_page);
        $hits[0]++;
        $fp = fopen($count_my_page, "w");
        fputs($fp, "$hits[0]");
        fclose($fp);
        $serial = $hits[0];
        $sql = mysqli_query($con, "INSERT into staff(serial,fname,lname,email,password,role,country,city,contact,address,status)
    values('$serial','$fname','$lname','$email','$password','$role','$country','$city','$contact','$address','Admin')");
        if ($sql) {
            $notify = 'error';
            $show = 'Account created';

            header("Refresh:1.5; url=login");

            mysqli_close($con);
        } else {
            $notify = 'error';
            $show = 'Failed to create account';

            mysqli_close($con);
        }
    }
}
ob_start();
session_start();
if (isset($_POST['admin_login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $loginquery = "SELECT * FROM staff WHERE role='Admin' and email='$email' and password='$password'";
    $result = mysqli_query($con, $loginquery);
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $notify = 'error';
        $show = 'Login was Successful!!';
        $_SESSION["adminadmin"] = $row['email'];
        header("refresh:1;url=index.php?dashboard");
    } else {
        $notify = 'error';
        $show = 'Email or Password is Wrong';
    }
}
ob_end_flush();
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
        <?php
        if (mysqli_num_rows(mysqli_query($con, "SELECT * from staff where role='Admin'")) > 0) {
            echo ' <form class="form-login" action="" method="post">
            <!-- form-login Starts -->

            <h2 class="form-login-heading">The Royal Dutch Shell Admin Login</h2>

            <input type="text" class="form-control" name="email" placeholder="Email Address"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="49"/>

            <input type="password" class="form-control" name="password" placeholder="Password"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="15" minlength="6"/>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">

                Log in

            </button><br>
            <a href="forgot" style="text-decoration: dotted;">

            Forgot Password</a>


        </form>'; //reg,name,email,password,role,country,city,contact,address,status,comment,profile,reg_date
        } else {
            echo ' <form class="form-login" action="" method="post">
            <!-- form-login Starts -->

            <h2 class="form-login-heading">The Royal Dutch Shell Admin Register</h2>

            <input type="text" class="form-control" name="fname" placeholder="first name"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="60"/>
            <input type="text" class="form-control" name="lname" placeholder="lastname"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="60"/>

            <input type="email" class="form-control" name="email" placeholder="Email Address"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="49"/>

            <select id="country" name="country" class="form-control" required>
            <option value="">Select County</option>
            <option value="NAIROBI">NAIROBI</option>
            <option value="KAKAMEGA">KAKAMEGA</option>
            <option value="BUNGOMA">BUNGOMA</option>
            <option value="BOMET">BOMET</option>
            <option value="NANDI">NANDI</option>
            <option value="TURKANA">TURKANA</option>
            <option value="LAMU">LAMU</option>
            <option value="ISIOLO">ISIOLO</option>
            <option value="KIAMBU">KIAMBU</option>
             <option value="MURANGA">MURANGA</option>
             <option value="MERU">MERU</option>
             <option value="EMBU">EMBU</option>
             <option value="KISUMU">KISUMU</option>
             <option value="NAKURU">NAKURU</option>
             <option value="THARAKA NITHI">THARAKA NITHI</option>
             <option value="KIRINYAGA">KIRINYAGA</option>
             <option value="NYERI">NYERI</option>
             <option value="TAITA TAVETA">TAITA TAVETA</option>
             <option value="SIAYA">SIAYA</option>
             <option value="MOMBASA">MOMBASA</option>
             <option value="HOMA BAY">HOMA BAY</option></select><br>
            <input type="text" class="form-control" name="city" placeholder="Your city"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="30"/>

            <input type="number" class="form-control" name="contact" placeholder="Your contact"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="13"/>

            <input type="text" class="form-control" name="address" placeholder="Your address"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="30"/>

            <input type="password" class="form-control" name="password" placeholder="Password"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required style="font-size:16px" maxlength="15" minlength="6"/>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_reg">

                Register

            </button>


        </form>';
        }
        ?>

    </div>



</body>

</html>