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
                                <th>quote_id:</th>
                                <th>Supplier:</th>
                                <th>category:</th>
                                <th>type:</th>
                                <th>description:</th>
                                <th>image:</th>
                                <th>quantity</th>
                                <th>price:</th>
                                <th>status:</th>
                                <th>reg_date</th>

                            </tr>
                            
                        </thead><!-- thead Ends -->

                        <tbody>
                            <!-- tbody Starts -->

                            <?php

                                $i = 0;

                                $get_c = "SELECT * from purchses order by reg_date asc";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $quote_id = $row_c['quote_id'];
                                    $reg = $row_c['reg'];
                                    $category = $row_c['category'];

                                    $type = $row_c['type'];

                                    $description = $row_c['description'];
                                    $image =  $row_c['image'];
                                    $quantity =  $row_c['quantity'];

                                    $price = $row_c['price'];
                                    $status =  $row_c['status'];
                                    $reg_date =  $row_c['reg_date'];

                                    $i++;

                                ?>

                            <tr>
                                   
                                <td><?php echo $i; ?></td>

<td><?php echo $quote_id; ?></td>

<td><?php echo $reg; ?></td>

                                <td><?php echo $category; ?></td>

                                <td><?php echo $type; ?></td>

<td><?php echo $description; ?></td>
<td><img src="json/images/<?php echo $image; ?>" height="80px" width="80px"></td>

<td><?php echo $quantity; ?></td>
<td>Kes<?php echo $price; ?></td>

<td><?php echo $status; ?></td>

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