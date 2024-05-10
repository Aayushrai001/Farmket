<?php
include ("../Functions/functions.php");
?>

<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farmer - Transaction</title>
    <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
    <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <script src="../portal_files/jquery.min.js.download"></script>
    <script src="../portal_files/popper.min.js.download"></script>
    <script src="../portal_files/bootstrap.min.js.download"></script>

    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }


        .header {
            position: sticky;
            z-index: 100;
            top: 0rem;
            height: 69px;
            width: 100%;
            background-color: #00b300;
        }

        .select_element {
            width: 20px;
            background-color: transparent;
            border: none;
            text: none;
        }


        #logo {
            height: 66px;
            width: 100px;
            text-align: left;
            float: left;
        }

        .search_input {
            float: left;
            margin-left: 50px;
            margin-top: 20px;

        }

        .proicon {
            float: right;
            margin-right: 10px;
            margin-top: 20px;
        }

        .dropdown {
            float: right;
            margin-right: 35px;
            margin-top: 20px;

        }

        .options {
            color: yellow;
            margin-left: 20px;
            /* width: 25px; */
            margin-right: 50px;
            display: inline;
        }

        .icon2 {
            float: right;
            margin-right: 10px;
            margin-top: 20px;

        }

        .loginz {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
        }

        .headerdown {
            margin-left: 15%;
            height: 50px;
            width: 80%;
        }

        .makeitgreen {
            color: #00b300;
        }

        .sel1 {
            color: green;
            float: left;
            margin-top: 3px;
        }

        .sel2 {
            border-color: green;
            color: green;
            float: left;
            margin-left: 600px;
            margin-top: 3px;
        }

        .sel3 {
            font-size: 20px;
            margin-top: 3px;
            float: right;
            margin-right: 5px;
        }



        #input1 {
            width: 220px;
            border: none;
        }


        #input1:active {
            background-color: tomato;
        }


        .wrapper {
            display: grid;
            grid-template-columns: 20% 20% 20% 20%;
            grid-column-gap: 20px;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
            grid-row-gap: 10px;
            margin-left: 30px;
        }

        .inputwrapper {
            float: left;
            border-style: double;
            text-align: center;
            margin-left: 80px;
            width: 280px;
            margin-bottom: 20px;
            clear: auto;
        }


        .inputwrapper:last-child {
            margin-right: 30px;
        }

        .addtocart {
            background-color: #FFD700;
        }

        .numberinput {
            width: 35px;
        }

        .content_item {
            text-align: center;
            justify-content: center;
        }

        .etc {
            margin-left: -40px;
            min-width: 90px;
            font-size: 20px;
        }

        .crop_items {
            color: green;
        }

        .footer {
            height: 70px;
            width: 100%;
            clear: both;
        }

        .payment {
            float: left;
            margin-left: 520px;
            font-size: 20px;
            margin-top: 25px;
        }

        .cash {
            float: left;
            margin-top: 0px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .paytm {
            float: left;
        }

        h3 {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: 10px 0 20px;
        }

        h3 span {
            background: #fff;
            padding: 0 10px;
        }

        .morefooter {
            height: 100px;
            width: 100%;
            background-color: white;

        }

        .call {
            float: left;
            font-size: 20px;
            margin-left: 150px;
            margin-top: 25px;
        }

        .gmail {
            margin-top: 10px;
            float: right;
            margin-right: 150px;

        }

        .instagram {
            margin-top: 10px;
            float: left;
            margin-left: 420px;
        }

        .instaid {
            height: 10px;
            width: 100%;

        }

        .text {
            float: left;
            margin-left: 735px;
            margin-top: -50px;
        }

        .gmailid {
            float: right;
            margin-right: 80px;
            margin-top: -60px;
        }

        .copy {
            float: left;
            margin-top: -65px;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
        }

        .wrapper {
            background-image: 100px;
        }

        .add_button {
            float: right;
            text-align: center;
        }


        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: white;

        }

        .lost {
            /* <font-fam></font-fam>; */
            color: black;
            text-align: center;
            height: 8%;
            margin-top: 150px;
            border-radius: 30px;
            font-size: 30px;
            /* margin-top: 5em; */
            background-color: olive;
            margin-top: 120px;
            margin: auto;
        }

        .new {
            text-align: center;
        }

        .button {
            position: relative;
            float: right;
        }

        h2 {
            color: white;
            margin-top: 3em;
            text-align: center;

        }

        .hii {
            float: right;
            margin-right: 5em;
        }

        .ribbon {
            position: relative;
            top: -16px;
            right: -706px;
            float: left;
            top: 0px;
            left: 0px;
            height: 74px;
            background-color: green;
        }

        .over {
            background-color: green;
            border: 1px;
            width: 100%;
            white-space: nowrap;
            height: 70px;


        }

        .subtract {
            float: right;
            border-color: olive;
            margin-top: 2%;
            text-align: center;
            border-radius: 25px;
        }


        .wrapper {
            background-image: 100px;
        }

        .add_button {
            float: right;
            text-align: center;
        }


        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: white;

        }

        .lost {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: black;
            text-align: center;
            margin-top: 220px;
            margin: auto;
        }


        .new {
            text-align: center;
        }

        .button {
            position: relative;
            float: right;
        }

        h2 {
            color: white;
            margin-top: 3em;
            text-align: center;

        }

        .hii {
            float: right;
            margin-right: 5em;
        }

        .ribbon {
            position: relative;
            top: -16px;
            right: -706px;
            float: left;
            top: 0px;
            left: 0px;
            height: 74px;
            background-color: green;
        }

        .over {
            background-color: green;
            border: 1px;
            width: 100%;
            white-space: nowrap;
            height: 70px;


        }

        .subtract {
            float: right;
            border-color: olive;
            margin-right: 12%;
            background-color: #00b300;
            text-align: center;
            /* border-radius: 25px; */
            width: 9%;
            height: 8%;
            margin-top: -5%;
            padding: 5px;

        }

        .items {
            width: 100%;
            margin: auto;
            height: auto;
        }

        .productbox {
            float: left;
            margin: 15px;
            margin-left: 30px;
            padding: 15px;
            border-style: outline;
            border: 2px solid;
            border-color: green;
            border-radius: 10px;
        }

        .productbox:hover {
            float: left;
            margin: 25px;
            margin-left: 30px;
            padding: 20px;
            border-style: outline;
            border: 2px solid;
            border-color: green;
            border-radius: 5px;
            font-weight: bolder;
            height: 325px;
            width: 240px;

        }

        .slideshow {
            margin-top: 10px;
            margin-left: 100px;
            margin-bottom: 20px;
            float: left;
            border-style: solid;
        }

        #navbar {

            padding: 20px;
            color: green;
            text-decoration: none;
            margin: 20px;
            font-size: 25px;
            padding-top: 10px;
        }

        #navbar:hover {
            padding: 20px;
            color: green;
            text-decoration: underline;
            margin: 15px;
            font-size: 25px;
            font-weight: bolder;
            padding-top: 10px;
        }

        #navbar i {
            padding-right: 1%;
        }

        .time {
            background-color: red;
            /* margin-left: 20px; */
        }

        .whats {
            text-align: center;
            margin-left: 30%;
        }

        .f1 {
            float: left;
            background-color: #fff;
            border: 1px solid red;
            height: 200px;
            border-radius: 50%;
            width: 200px;
            padding-top: 20px;
            border-style: solid;
            background-image: url("../Images/Website/f2.jpg");
            background-size: 200px 200px;
            background-repeat: no-repeat;
            border-color: #000;
            /* opacity: 5%; */
        }

        .t1 {
            padding-top: 70px;
            text-align: center;
            justify-items: center;
            color: black;
            font-weight: bold;
        }

        .t5 {
            margin-top: -13px;
        }

        .t4 {
            margin-top: -13px;

        }

        .whatsnew {
            /* background-image: url("../Images/Website/back.jpeg"); */

            background-color: red;

        }

        .f2 {
            margin-left: 130px;
            margin-right: 150px;
        }

        .f3 {
            margin-right: 150px;

        }

        .f4 {
            margin-right: 150px;
        }

        .pictus {
            margin-top: 200px;
            /* background-color: red; */
        }

        .pictus>img {
            height: 100px;

            width: 150px;
        }

        .imag1 {
            margin-top: 20px;
            margin-left: 180px;
        }

        .imag2 {
            margin-top: 20px;

            margin-left: 340px;

        }

        .imag3 {
            margin-top: 20px;

            margin-left: 350px;

        }

        .imag1_under {
            max-width: 250px;
            width: 100%;
            min-height: 100px;
            margin-left: 100px;
            text-align: center;
            font-size: 20px;

        }

        .imag2_under {
            max-width: 250px;
            width: 100%;
            min-height: 100px;
            margin-left: 290px;
            margin-top: 20px;
            text-align: center;
            font-size: 20px;
        }

        .imag3_under {
            max-width: 250px;
            width: 100%;
            font-size: 20px;

            min-height: 100px;
            margin-left: 290px;
            text-align: center;
        }

        .image {
            max-width: 200px;
        }

        .aligncenter {
            text-align: center;
        }

        .myfooter {
            background-color: #292b2c;
            color: goldenrod;
            margin-top: 15px;
        }

        a {
            color: goldenrod;
        }

        .navbar-inverse {
            background: #00cc00;
            color: black;
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse a {
            color: black;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: clack;
        }

        .caros {
            margin-top: 30px;

        }

        hr {
            border: 0;
            height: 0.5px;
            clear: both;
            display: block;
            width: 99%;
            background-color: black;
            margin-left: 0.5em;
        }

        img {
            max-width: 100%;
            display: inline-block;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #292b2c;
        }

        .navbar-custom {
            background-color: #292b2c;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #292b2c;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #292b2c;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #292b2c;
        }

        .firstimage {
            height: 500px;
            width: 100%;
        }

        .mybtn {
            border-color: green;
            border-style: solid;
        }

        .card {
            width: 100%;
            height: 100%;
            margin: 10px;
        }

        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        .tab {
            width: 100%;

            border-style: solid;
            border-width: 2px;
            padding: 2px;

        }

        /* th {
               border-color: white;
               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          .tableyhead {

               color: red;

          }

          .thy {
               background-color: #555;
               color: white;

          }

          .trow {
               align-content: center;
          } */

        body {
            margin: 0;
            padding: 0px;
            font-family: sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table td,
        .table th {
            padding: 12px 15px;
            border: 0px solid #ddd;
            text-align: center;
            font-size: 16px;
        }

        .table th {
            background-color: #292b2c;
            color: goldenrod;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        /* For medium devices (e.g. tablets) */
        /* @media (min-width: 420px) {
               img {
               max-width: 48%;
               }
          } */
        /* For large devices (e.g. desktops) */
        @media (min-width: 760px) {
            .resizing {
                height: 500px;
            }
        }

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .image {
                max-width: 48%;
            }

            .firstimage {
                height: auto;
                width: 90%;
            }

            .card {
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;

            }

            .col {
                margin-top: 20px;
            }

            .right {
                display: none;
                background-color: #ff5500;
            }

            .table thead {
                display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }

            .table tr {
                margin-bottom: 15px;
            }

            .table td {
                text-align: right;
                padding-left: 50%;
                text-align: right;
                position: relative;
            }

            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }

            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }


        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-xl ">
        <!-- <a href="#" class="navbar-brand">Academind</a> -->
        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
                <!-- <span id="icon" style="color:green"> 5 </span>
                </div>  -->
            </div>
            <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
            <a class="float-left" href="#">
                <img src="farmket.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 "
                    style="color:green;font-size:20px; "></i></span>
        </button>
        <a class="float-left" href="farmerHomepage.php">
            <img src="farmket.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>
        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div> -->
                <div class='loginz'>
                    <?php getFarmerUsername(); ?>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="row" style="text-align:center;">
        <div class="col-md-1 col-sm-12">
            <a href="farmerHomepage.php" id="navbar"><label>Home</label></a>
        </div>
        <div class="col-md-1 col-sm-12">
            <a href="farmerprofile2.php" id="navbar"><label>Profile</label></a>
        </div>
        <div class="col-md-2 col-sm-12">
            <a href="MyProducts.php" id="navbar"><label>Products</label></a>
        </div>
        <div class="col-md-2 col-sm-12">
            <a href="Transactions.php" id="navbar"><label>Transactions</label></a>
        </div>
        <div class="col-md-2 col-sm-12">
            <a href="order.php" id="navbar"><label>Order</label></a>
        </div>
        <div class="col-md-2 col-sm-12">
            <a href="Notification.php" id="navbar"><label>Notification</label></a>
        </div>
        <div class="col-md-2 col-sm-12">
            <a href="../Includes/logout.php" id="navbar"><label>Log Out</label></a>
        </div>
    </div>
    <hr>


    <br>

    <div style="display:block;">

        <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Orders</b></label>
        </div>
        <br>
    </div>

    <div class="container">
        <div class="sort-options">
            <form method="get">
                <label for="sort">Sort By:</label>
                <select name="sort" id="sort" onchange="this.form.submit()">
                    <option value="today">Today</option>
                    <option value="week">Week</option>
                    <option value="month">Month</option>
                </select>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Delivery Address</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Delivery Status</th>
                </tr>
            </thead>
            <div>
                <?php

                // Check if user is logged in
                if (!isset($_SESSION['phonenumber'])) {
                    echo "<tr><td colspan='7' align='center'>Please Login First!</td></tr>";
                    exit();
                }

                $sess_phone_number = $_SESSION['phonenumber'];
                $date_condition = ""; // Initialize date condition
                
                // Check if sort option is selected
                if (isset($_GET['sort'])) {
                    $sort_option = $_GET['sort'];
                    switch ($sort_option) {
                        case 'today':
                            $date_condition = "AND DATE(orders.order_date) = CURDATE()";
                            break;
                        case 'week':
                            $date_condition = "AND YEARWEEK(orders.order_date, 1) = YEARWEEK(CURDATE(), 1)";
                            break;
                        case 'month':
                            $date_condition = "AND MONTH(orders.order_date) = MONTH(CURDATE()) AND YEAR(orders.order_date) = YEAR(CURDATE())";
                            break;
                        default:
                            $date_condition = ""; // Default to no date filter
                    }
                }

                // SQL query to fetch orders
                $sel_price = "SELECT orders.*, products.product_title, buyerregistration.buyer_name, buyerregistration.buyer_phone FROM orders 
INNER JOIN products ON orders.product_id = products.product_id 
INNER JOIN buyerregistration ON orders.buyer_phonenumber = buyerregistration.buyer_phone
WHERE orders.phonenumber = '$sess_phone_number' $date_condition";

                $run_price = mysqli_query($con, $sel_price) or die("Error: " . mysqli_error($con));

                while ($p_price = mysqli_fetch_array($run_price)) {
                    // Your existing code to display orders goes here
                }

                // Handle form submission to update delivery status in the database
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['delivery_status']) && isset($_POST['order_id'])) {
                        $order_id = $_POST['order_id'];
                        $new_status = $_POST['delivery_status'];

                        // Fetch the current status from the database
                        $fetch_status_query = "SELECT delivery_status FROM orders WHERE order_id = '$order_id'";
                        $fetch_status_result = mysqli_query($con, $fetch_status_query);
                        $current_status_row = mysqli_fetch_assoc($fetch_status_result);
                        $current_status = $current_status_row['delivery_status'];

                        // Update delivery status only if the new status is different from the current status
                        if ($new_status != $current_status) {
                            $update_query = "UPDATE orders SET delivery_status = '$new_status' WHERE order_id = '$order_id'";
                            mysqli_query($con, $update_query);
                        }
                    }
                }
                ?>
            </div>
            <br> <br>

            <section id="footer" class="myfooter">
                <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                        <div class="col aligncenter">
                            <br>
                            <h5>Payment Option</h5>
                            <img src="../Images/Website/esewa.png" alt="esewa">
                            <img src="../Images/Website/cod.jpg" alt="esewa" style="height:37px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href="javascript:void();"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="javascript:void();"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="javascript:void();"><i
                                            class="fa fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="javascript:void();"><i
                                            class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                            class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                            <p><u><a href="https://www.farmketcraft.com/">farmketCraft Corporation</a></u>
                                is a
                                Multitrading
                                Company for farmers ang traders</p>
                            <p class="h6">Copy All right Reversed.<a class="text-green ml-2"
                                    href="https://www.farmket.com" target="_blank">farmkettech</a></p>
                        </div>
                        </hr>
                    </div>
                </div>
            </section>

</body>

</html>