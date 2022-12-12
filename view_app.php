<?php
if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {
?>
<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <h1 class="page-header">Log Activity</h1>

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> App Work

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row">
    <!-- 2 row Starts -->
<hr>
<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-yellow">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $countPay; ?> </div>

                    <div>Shipped Payment</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_pay">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->
<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-red">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $counUs; ?> </div>

                    <div>Not Shipped Payment</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_pay_n">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->
<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-primary">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $countcart; ?> </div>

                    <div>Cart</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_cart">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-green">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $countcacountPrort; ?> </div>

                    <div>Products</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_products">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-red">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $countServ; ?> </div>

                    <div>Service Requests</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_service">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-red">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $countPir; ?> </div>

                    <div>Purchases</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_purchase">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-green">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $countSup; ?> </div>

                    <div>Supplies</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_sup">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Details </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-green">
        <!-- panel panel-red Starts -->

        <div class="panel-heading">
            <!-- panel-heading Starts -->

            <div class="row">
                <!-- panel-heading row Starts -->

                <div class="col-xs-9 text-left">
                    <!-- col-xs-9 text-right Starts -->

                    <div class="huge"> <?php echo $contrt; ?> </div>

                    <div>Ratings</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_feed">

            <div class="panel-footer">
                <!-- panel-footer Starts -->

                <span class="pull-left"> View Feedback </span>

                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                <div class="clearfix"></div>

            </div><!-- panel-footer Ends -->

        </a>

    </div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<?php } ?>