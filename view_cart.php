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

                <i class="fa fa-dashboard"></i> Dashboard / View Cart

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

                    <i class="fa fa-money fa-fw"></i> View Cart

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
                                <th>serial:</th>
                                <th>customer:</th>
                                <th>productID:</th>
                                <th>category:</th>
                                <th>type:</th>
                                <th>price:</th>
                                <th>quantity</th>
                                <th>image:</th>
                                <th>status:</th>
                                <th>reg_date</th>

                            </tr>
                            
                        </thead><!-- thead Ends -->


                        <tbody>
                            <!-- tbody Starts -->

                            <?php

                                $i = 0;

                                $get_c = "SELECT * from cart order by status asc";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $serial = $row_c['serial'];
  
                                    $customer = $row_c['customer'];

                                    $product = $row_c['product'];

                                    $category = $row_c['category'];

                                    $type = $row_c['type'];

                                    $price = $row_c['price'];

                                    $quantity = $row_c['quantity'];
                                    $image =  $row_c['image'];
                                    $status =  $row_c['status'];
                                    $reg_date =  $row_c['reg_date'];

                                    $i++;

                                ?>

                            <tr>
                                   
                                <td><?php echo $i; ?></td>

                                <td><?php echo $serial; ?></td>

                                <td><?php echo $customer; ?></td>

                                <td><?php echo $product; ?></td>

                                <td><?php echo $category; ?></td>

                                <td><?php echo $type; ?></td>

<td>Kes<?php echo $price; ?></td>

<td><?php echo $quantity; ?>units</td>
<td><img src="json/images/<?php echo $image; ?>" height="80px" width="80px"></td>

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