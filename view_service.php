<?php
include("includes/db.php");
include('includes/connector.php');


if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Service

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

                    <i class="fa fa-money fa-fw"></i> View Service

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
                                <th>mpesa:</th>
                                <th>amount:</th>
                                <th>service:</th>
                                <th>cust_id:</th>
                                <th>Name:</th>
                                <th>phone:</th>
                                <th>status:</th>
                                <th>manager:</th>
                                <th> customer</th>
                                <th>reg_date</th>

                            </tr>
                         
                        </thead><!-- thead Ends -->


                        <tbody>
                            <!-- tbody Starts -->

                            <?php

                                $i = 0;

                                $get_c = "SELECT * from service order by status asc";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $mpesa = $row_c['mpesa'];
   //mpesa,amount,service,cust_id,name,phone,status,manager,customer,reg_date
                                    $amount = $row_c['amount'];

                                    $orders = $row_c['service'];

                                    $cust_id = $row_c['cust_id'];

                                    $name = $row_c['name'];

                                    $phone = $row_c['phone'];
                                    $status =  $row_c['status'];

                                    $manager = $row_c['manager'];
                                    $customer =  $row_c['customer'];
                                    $reg_date =  $row_c['reg_date'];

                                    $i++;

                                ?>

                            <tr>
                                   
                                <td><?php echo $i; ?></td>

                                <td><?php echo $mpesa; ?></td>

                                <td>Kes<?php echo $amount; ?></td>

                                <td><?php echo $orders; ?></td>

                                <td><?php echo $cust_id; ?></td>

                                <td><?php echo $name; ?></td>

<td><?php echo $phone; ?></td>
<td><?php if($status==1){echo 'Approved';}
elseif($status==0){echo 'Pending';}
elseif($status==2){echo 'Rejected';}?></td>

<td><?php echo $manager; ?></td>

<td><?php echo $customer; ?></td>

<td><?php echo $reg_date; ?></td>



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