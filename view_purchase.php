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

                <i class="fa fa-dashboard"></i> Dashboard / View Purchases

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

                    <i class="fa fa-money fa-fw"></i> View Purchases

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
                                <th>category:</th>
                                <th>type:</th>
                                <th>quantity</th>
                                <th>company:</th>
                                <th>Supplier:</th>
                                <th>contact:</th>
                                <th>country:</th>
                                <th>reg_date</th>

                            </tr>
                            
                        </thead><!-- thead Ends -->

                        <tbody>
                            <!-- tbody Starts -->

                            <?php

                                $i = 0;

                                $get_c = "SELECT * from orders order by reg_date asc";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $category = $row_c['category'];

                                    $type = $row_c['typed'];

                                    $company = $row_c['company'];
                                    $contact =  $row_c['contact'];
                                    $quantity =  $row_c['quantity'];

                                    $country = $row_c['country'];
                                    $reg =  $row_c['reg'];
                                    $reg_date =  $row_c['reg_date'];

                                    $i++;

                                ?>

                            <tr>
                                   
                                <td><?php echo $i; ?></td>

<td><?php echo $category; ?></td>

<td><?php echo $type; ?></td>

<td><?php echo $quantity; ?></td>

                                <td><?php echo $company; ?></td>

                                <td><?php echo $reg; ?></td>

<td><?php echo $contact; ?></td>
<td>Kes<?php echo $country; ?></td>

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