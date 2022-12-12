<?php



if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {




?>

<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <h1 class="page-header">Dashboard</h1>

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row">
    <!-- 2 row Starts -->

    <div class="col-lg-3 col-md-6">
        <!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-primary">
            <!-- panel panel-primary Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <div class="row">
                    <!-- panel-heading row Starts -->

                    <div class="col-xs-9 text-left">
                        <!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_inventory_manager; ?> </div>

                        <div>New Inventory Managers</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_inventory_manager">

                <div class="panel-footer">
                    <!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-primary Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6">
        <!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-green">
            <!-- panel panel-green Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <div class="row">
                    <!-- panel-heading row Starts -->

                    <div class="col-xs-9 text-left">
                        <!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_customers; ?> </div>

                        <div>New Customers</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_customers">

                <div class="panel-footer">
                    <!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-green Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6">
        <!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-yellow">
            <!-- panel panel-yellow Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <div class="row">
                    <!-- panel-heading row Starts -->

                    <div class="col-xs-9 text-left">
                        <!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_finance_manager; ?> </div>

                        <div>New Finance Managers</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_finance_manager">

                <div class="panel-footer">
                    <!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-yellow Ends -->

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

                        <div class="huge"> <?php echo $count_suppliers; ?> </div>

                        <div>New Suppliers</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_suppliers">

                <div class="panel-footer">
                    <!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->


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

                    <div class="huge"> <?php echo $count_drivers; ?> </div>

                    <div>New Drivers</div>

                </div><!-- col-xs-9 text-right Ends -->

            </div><!-- panel-heading row Ends -->

        </div><!-- panel-heading Ends -->

        <a href="index.php?view_drivers">

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
            <!-- panel panel-green Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <div class="row">
                    <!-- panel-heading row Starts -->

                    <div class="col-xs-9 text-left">
                        <!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $countDi; ?> </div>

                        <div>New Dispatcher</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_dispatcher">

                <div class="panel-footer">
                    <!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-green Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->
</div><!-- 2 row Ends -->


<?php } ?>