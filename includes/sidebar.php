<?php


if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- navbar navbar-inverse navbar-fixed-top Starts -->

    <div class="navbar-header">
        <!-- navbar-header Starts -->

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <!-- navbar-ex1-collapse Starts -->


            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>


        </button><!-- navbar-ex1-collapse Ends -->

        <a class="navbar-brand" href="index.php?dashboard">ShellAfrica Admin Panel</a>


    </div><!-- navbar-header Ends -->

    <ul class="nav navbar-right top-nav">
        <!-- nav navbar-right top-nav Starts -->

        <li class="dropdown">
            <!-- dropdown Starts -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- dropdown-toggle Starts -->

                <i class="fa fa-user"></i>

                <?php echo $admin_name; ?> <b class="caret"></b>


            </a><!-- dropdown-toggle Ends -->

            <ul class="dropdown-menu">
                <!-- dropdown-menu Starts -->

                <li>
                    <!-- li Starts -->

                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">

                        <i class="fa fa-fw fa-user"></i> Profile


                    </a>

                </li><!-- li Ends -->

        </li><!-- li Ends -->

        <li class="divider"></li>

        <li>
            <!-- li Starts -->

            <a href="logout.php">

                <i class="fa fa-fw fa-power-off"> </i> Log Out

            </a>

        </li><!-- li Ends -->

    </ul><!-- dropdown-menu Ends -->




    </li><!-- dropdown Ends -->


    </ul><!-- nav navbar-right top-nav Ends -->

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

        <ul class="nav navbar-nav side-nav">
            <!-- nav navbar-nav side-nav Starts -->

            <li>
                <!-- li Starts -->

                <a href="index.php?dashboard">

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a>

            </li><!-- li Ends -->



            <li>

                <a href="index.php?view_customers">

                    <i class="fa fa-fw fa-user"></i> View Customers

                </a>

            </li>

            <li>

                <a href="index.php?view_suppliers">

                    <i class="fa fa-fw fa-user"></i> View Suppliers

                </a>

            </li>

            <li>

                <a href="index.php?view_finance_manager">

                    <i class="fa fa-fw fa-user"></i> View Finance Manager

                </a>

            </li>

            <li>

                <a href="index.php?view_inventory_manager">

                    <i class="fa fa-fw fa-user"></i> View Inventory Manager

                </a>

            </li>

<li>

    <a href="index.php?view_dispatcher">

        <i class="fa fa-fw fa-user"></i> View Dispatcher

    </a>

</li>

            <li>

                <a href="index.php?view_drivers">

                    <i class="fa fa-fw fa-car"></i> View Drivers

                </a>

</li>

<li>

    <a href="index.php?view_app">

        <i class="fa fa-fw fa-history"></i> View Appwork

    </a>

</li>

            <li>
                <!-- li Starts -->

                <a href="logout.php">

                    <i class="fa fa-fw fa-power-off"></i> Log Out

                </a>

            </li><!-- li Ends -->

        </ul><!-- nav navbar-nav side-nav Ends -->

    </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>