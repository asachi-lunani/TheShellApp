<?php

session_start();

include("includes/db.php");

if (!isset($_SESSION['adminadmin'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<?php

    $admin_session = $_SESSION['adminadmin'];

    $get_admin = "select * from staff  where email='$admin_session'";

    $run_admin = mysqli_query($con, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['serial'];

    $admin_name = $row_admin['fname'];

    $admin_email = $row_admin['email'];

    $admin_contact = $row_admin['contact'];

    $get_inventory_manager = "SELECT * from staff where role='Inventory' and status='Pending'";
    $run_inventory_manager = mysqli_query($con, $get_inventory_manager);
    $count_inventory_manager = mysqli_num_rows($run_inventory_manager);

    $get_customers = "SELECT * from customer where status='Pending'";
    $run_customers = mysqli_query($con, $get_customers);
    $count_customers = mysqli_num_rows($run_customers);

    $get_finance_manager = "SELECT * from staff where role='Finance' and status='Pending'";
    $run_finance_manager = mysqli_query($con, $get_finance_manager);
    $count_finance_manager = mysqli_num_rows($run_finance_manager);

    $get_suppliers = "SELECT * from supplier where status='Pending'";
    $run_suppliers = mysqli_query($con, $get_suppliers);
    $count_suppliers = mysqli_num_rows($run_suppliers);

    $get_drivers = "SELECT * from driver where status='Pending'";
    $run_drivers = mysqli_query($con, $get_drivers);
    $count_drivers = mysqli_num_rows($run_drivers);

    $getPay = "SELECT * from payment where mode='Shipped'";
    $runPay = mysqli_query($con, $getPay);
    $countPay = mysqli_num_rows($runPay);

    $getp = "SELECT * from payment where mode='No Shipment'";
    $rum = mysqli_query($con, $getp);
    $counUs = mysqli_num_rows($rum);

    $getcart = "SELECT * from cart";
    $runcart = mysqli_query($con, $getcart);
    $countcart = mysqli_num_rows($runcart);

    $getPro = "SELECT * from product";
    $runPro = mysqli_query($con, $getPro);
    $countcacountPrort = mysqli_num_rows($runPro);

    $getServ = "SELECT * from service";
    $runServ = mysqli_query($con, $getServ);
    $countServ = mysqli_num_rows($runServ);

    $getPru = "SELECT * from orders";
    $runPur = mysqli_query($con, $getPru);
    $countPir = mysqli_num_rows($runPur);

    $getSup = "SELECT * from purchses";
    $runSup = mysqli_query($con, $getSup);
    $countSup = mysqli_num_rows($runSup);

    $getRte = "SELECT * from rating";
    $runRt = mysqli_query($con, $getRte);
    $contrt = mysqli_num_rows($runRt);

    $getDispa = "SELECT * from staff where role='Dispatcher' and status='Pending'";
    $runDis = mysqli_query($con, $getDispa);
    $countDi = mysqli_num_rows($runDis);


    ?>


<!DOCTYPE html>
<html>

<head>

    <title>ShellAfrica Admin Panel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147"
        type="image/png">

</head>

<body>

    <div id="wrapper">
        <!-- wrapper Starts -->

        <?php include("includes/sidebar.php");  ?>

        <div id="page-wrapper">
            <!-- page-wrapper Starts -->

            <div class="container-fluid">
                <!-- container-fluid Starts -->

                <?php

                    if (isset($_GET['dashboard'])) {

                        include("dashboard.php");
                    }//


                    if (isset($_GET['view_pay'])) {

                        include("view_pay.php");
                    }
                    if (isset($_GET['view_pay_n'])) {

                        include("view_pay_n.php");
                    }


                    if (isset($_GET['view_cart'])) {

                        include("view_cart.php");
                    }
                    
                    if (isset($_GET['view_feed'])) {

                        include("view_feed.php");
                    }


                    if (isset($_GET['view_products'])) {

                        include("view_products.php");
                    }

                    if (isset($_GET['view_inventory_manager'])) {

                        include("view_inventory_manager.php");
                    }

                    if (isset($_GET['view_suppliers'])) {

                        include("view_suppliers.php");
                    }

                    if (isset($_GET['view_finance_manager'])) {

                        include("view_finance_manager.php");
                    }

                    if (isset($_GET['view_drivers'])) {

                        include("view_drivers.php");
                    }

                    if (isset($_GET['view_customers'])) {

                        include("view_customers.php");
                    }

                    if (isset($_GET['view_dispatcher'])) {

                        include("view_dispatcher.php");
                    }
                    if (isset($_GET['activate_customers'])) {

                        include("activate_customers.php");
                    }

                    if (isset($_GET['edit_customers'])) {

                        include("edit_customers.php");
                    }

                    if (isset($_GET['insert_user'])) {

                        include("insert_user.php");
                    }

                    if (isset($_GET['view_users'])) {

                        include("view_users.php");
                    }

                    if (isset($_GET['view_sup'])) {

                        include("view_sup.php");
                    }

                    if (isset($_GET['view_purchase'])) {

                        include("view_purchase.php");
                    }

                    if (isset($_GET['view_service'])) {

                        include("view_service.php");
                    }

                    if (isset($_GET['view_app'])) {

                        include("view_app.php");
                    }


                    if (isset($_GET['user_delete'])) {

                        include("user_delete.php");
                    }



                    if (isset($_GET['user_profile'])) {

                        include("user_profile.php");
                    }

                    if (isset($_GET['edit_css'])) {

                        include("edit_css.php");
                    }

                    ?>

            </div><!-- container-fluid Ends -->

        </div><!-- page-wrapper Ends -->

    </div><!-- wrapper Ends -->

    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>