<?php



if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['user_profile'])) {

        $edit_id = $_GET['user_profile'];

        $get_admin = "select * from staff where serial='$edit_id'";

        $run_admin = mysqli_query($con, $get_admin);

        $row_admin = mysqli_fetch_array($run_admin);

        $admin_id = $row_admin['serial'];

        $admin_name = $row_admin['fname'];

        $admin_Lname = $row_admin['lname'];

        $admin_serial = $row_admin['serial'];

        $admin_email = $row_admin['email'];

        $admin_country = $row_admin['country'];

        $admin_city = $row_admin['city'];

        $admin_address = $row_admin['address'];
    }


    //reg,name,email,password,role,country,city,contact,address,status,comment,profile,reg_date

    ?>


<div class="row">
    <!-- 1  row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / Edit Profile

            </li>



        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row">
    <!-- 2 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <div class="panel panel-default">
            <!-- panel panel-default Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <h3 class="panel-title">

                    <i class="fa fa-money fa-fw"></i> Edit Profile

                </h3>


            </div><!-- panel-heading Ends -->


            <div class="panel-body">
                <!-- panel-body Starts -->

                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Serial: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_serial" class="form-control" required
                                value="<?php echo $admin_serial; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->

                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">First Name: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_name" class="form-control" required
                                value="<?php echo $admin_name; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->

                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">Last Name: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_name" class="form-control" required
                                value="<?php echo $admin_Lname; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Email: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_email" class="form-control" required
                                value="<?php echo $admin_email; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Country: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_pass" class="form-control" required
                                value="<?php echo $admin_country; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Contact: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_contact" class="form-control" required
                                value="<?php echo $admin_contact; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Address: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_address" class="form-control" required
                                value="<?php echo $admin_address; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">User City: </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="text" name="admin_city" class="form-control" required
                                value="<?php echo $admin_city; ?>">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">
                            <!-- col-md-6 Starts -->

                            <input type="submit" name="" value="Update User" class="btn btn-primary form-control">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

    if (isset($_POST['update'])) {

        $admin_name = $_POST['admin_name'];

        $admin_email = $_POST['admin_email'];

        $admin_pass = $_POST['admin_pass'];

        $admin_contact = $_POST['admin_contact'];


        $update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_contact='$admin_contact' where admin_id='$admin_id'";

        $run_admin = mysqli_query($con, $update_admin);

        if ($run_admin) {

            echo "<script>alert('User Has Been Updated successfully and login again')</script>";

            echo "<script>window.open('login.php','_self')</script>";

            session_destroy();
        }
    }


    ?>



<?php }  ?>