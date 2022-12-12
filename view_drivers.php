<?php
include("includes/db.php");
include('includes/connector.php');


if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

    if (isset($_POST['approveBtn'])) {
        $customerid = $_POST['identity'];
        $status = 'Approved';
        $remarks = " ";
        $sql = "update driver set status=:status,comment=:remarks WHERE reg=:idi";
        $query = $debe->prepare($sql);
        $query->bindParam(':idi', $customerid, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':remarks', $remarks, PDO::PARAM_STR);
        $query->execute();
        // header('location:index.php?view_customers');
    }
    if (isset($_POST['rejectBtn'])) {
        $customerid = $_POST['identity'];
        $remarks = $_POST['remarks'];
        $status = "Rejected";
        $sql = "update driver set status=:status,comment=:remarks WHERE reg=:idi";
        $query = $debe->prepare($sql);
        $query->bindParam(':idi', $customerid, PDO::PARAM_STR);
        $query->bindParam(':remarks', $remarks, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        //header('location:index.php?view_customers');
    }
?>

<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Drivers

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row">
    <!-- 2 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <div class="panel panel-default">
            <!-- panel panel-default Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <h3 class="panel-title">
                    <!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"></i> View Drivers

                </h3><!-- panel-title Ends -->

            </div><!-- panel-heading Ends -->


            <div class="panel-body">
                <!-- panel-body Starts -->

                <div class="table-responsive" style="min-height: 400px;">
                    <!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead>
                            <!-- thead Starts -->

                            <tr>
                                <th>.</th>
                                <th>DriverID:</th>
                                <th>Name:</th>
                                <th>Email:</th>
                                <th>Country:</th>
                                <th>City:</th>
                                <th>Address:</th>
                                <th>Contact:</th>
                                <th> Status</th>
                                <th>Comment</th>
                                <th> Edit:</th>

                            </tr>

                        </thead><!-- thead Ends -->


                        <tbody>
                            <!-- tbody Starts -->

                            <?php

                                $i = 0;

                                $get_c = "SELECT * from driver order by status asc";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $reg = $row_c['reg'];

                                    $name = $row_c['fname'] . ' ' . $row_c['lname'];

                                    $email = $row_c['email'];

                                    $country = $row_c['country'];

                                    $city = $row_c['city'];

                                    $c_address = $row_c['address'];

                                    $contact = $row_c['contact'];
                                    //reg,name,email,password,country,city,contact,address,status,comment,profile,reg_date
                                    $status =  $row_c['status'];
                                    $comment =  $row_c['comment'];

                                    $i++;

                                ?>

                            <tr>

                                <td><?php echo $i; ?></td>

                                <td><?php echo $reg; ?></td>

                                <td><?php echo $name; ?></td>

                                <td><?php echo $email; ?></td>

                                <td><?php echo $country; ?></td>

                                <td><?php echo $city; ?></td>

                                <td><?php echo $c_address; ?></td>

                                <td><?php echo $contact; ?></td>
                                <td>
                                    <?php if ($row_c['status'] == 'Pending') {
                                                echo 'Approval Pending';
                                            } elseif ($row_c['status'] == 'Rejected') {
                                                echo 'Account Inactive';
                                            } else {
                                                echo 'Account activated';
                                            } ?></td>
                                <td><?php echo $comment; ?></td>
                                <td class="center">
                                    <?php if ($row_c['status'] == 'Approved') { ?>
                                    <div class="dropdown" style="float: right;">
                                        <button class="btn btn-danger" type="button"
                                            data-toggle="dropdown">Reject</button>
                                        <ul class="dropdown-menu alert panel-footer">
                                            <li>
                                                <form method="post">
                                                    <input type="hidden" name="identity" value="<?php echo $reg; ?>" />
                                                    <textarea class="form-control" rows="5" name="remarks"
                                                        placeholder="why do you want to reject this account?"
                                                        required></textarea>
                                                    <input type="submit" name="rejectBtn" value="Reject"
                                                        class="btn btn-danger" />
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php } elseif ($row_c['status'] == 'Pending') { ?>
                                    <div class="dropdown" style="float: left;">
                                        <button class="btn btn-danger" type="button"
                                            data-toggle="dropdown">Reject</button>
                                        <ul class="dropdown-menu alert panel-footer">
                                            <li>
                                                <form method="post">
                                                    <input type="hidden" name="identity" value="<?php echo $reg; ?>" />
                                                    <textarea class="form-control" rows="5" name="remarks"
                                                        placeholder="why do you want to reject this account?"
                                                        required></textarea>
                                                    <input type="submit" name="rejectBtn" value="Reject"
                                                        class="btn btn-danger" />
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown" style="float: left;">
                                        <button class="btn btn-success" type="button"
                                            data-toggle="dropdown">Approve</button>
                                        <ul class="dropdown-menu alert panel-footer">
                                            <li>
                                                <form method="post">
                                                    <input type="hidden" name="identity" value="<?php echo $reg; ?>" />
                                                    <input type="submit" name="approveBtn" value="Approve"
                                                        class="btn btn-success" />
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php } else { ?>
                                    <div class="dropdown" style="float: left;">
                                        <button class="btn btn-success" type="button"
                                            data-toggle="dropdown">Approve</button>
                                        <ul class="dropdown-menu alert panel-footer">
                                            <li>
                                                <form method="post">
                                                    <input type="hidden" name="identity" value="<?php echo $reg; ?>" />
                                                    <input type="submit" name="approveBtn" value="Approve"
                                                        class="btn btn-success" />
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </td>



                            </tr>

                            <?php } ?>


                        </tbody><!-- tbody Ends -->



                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>