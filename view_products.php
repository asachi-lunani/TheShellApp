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

                <i class="fa fa-dashboard"></i> Dashboard / View Products

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

                    <i class="fa fa-money fa-fw"></i> View Products

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
                                <th>description:</th>
                                <th>image:</th>
                                <th>Original</th>
                                <th>Remaining</th>
                                <th>price:</th>
                                <th>reg_date</th>

                            </tr>
                            
                        </thead><!-- thead Ends -->

                        <tbody>
                            <!-- tbody Starts -->

                            <?php

                                $i = 0;

                                $get_c = "SELECT * from product order by reg_date asc";

                                $run_c = mysqli_query($con, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                        //category,type,description,image,qty,quantity,price,reg_date
                                    $category = $row_c['category'];

                                    $type = $row_c['type'];

                                    $description = $row_c['description'];
                                    $image =  $row_c['image'];
                                    $qty =  $row_c['qty'];
                                    $quantity =  $row_c['quantity'];

                                    $price = $row_c['price'];
                                    $reg_date =  $row_c['reg_date'];

                                    $i++;

                                ?>

                            <tr>
                                   
                                <td><?php echo $i; ?></td>

                                <td><?php echo $category; ?></td>

                                <td><?php echo $type; ?></td>

<td><?php echo $description; ?></td>
<td><img src="json/images/<?php echo $image; ?>" height="80px" width="80px"></td>

<td><?php echo $qty; ?></td>

<td><?php echo $quantity; ?></td>
<td>Kes<?php echo $price; ?></td>

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