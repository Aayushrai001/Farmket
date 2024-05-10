<?php
include ("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Buyer Homepage</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <a href="https://icons8.com/icon/83325/roman-soldier"></a>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <style>
          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
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
               width: 100%;
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

          /* .images {
            transition: 0.5s;
        } */

          .images:hover {

               height: 220px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.3s;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               /* font-family: serif; */
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          .mobtext {
               display: block;
          }

          .destext {
               display: none;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               font-family: serif;
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          /* .settings{
    margin-left:10px;
} */
          .States {
               margin-right: -1%;
               margin-left: 10%
          }

          .districts {
               margin-right: -15%;
          }

          .go {
               margin-right: -50%;
               margin-left: 5%;
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .States {
                    margin-right: 0%;
                    margin-left: 0%;
                    margin-top: 5%;
               }

               .districts {
                    margin-right: 0%;
                    margin-top: 5%;
               }

               .go {
                    margin-right: 0%;
                    margin-left: 40%;
                    margin-right: 30%;
                    margin-top: 10%;
               }


               .guard {
                    width: 100%;
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    line-height: 0.1em;
                    margin: 10px 0 20px;
                    font-family: serif;
               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }

               .mobtext {
                    display: none;
               }

               .destext {
                    display: inline-block;
                    width: 90%;
                    margin-left: 5%;
                    margin-right: 5%;
               }

               .mycarousel {
                    display: none;
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

               /* 
            .settings{
            margin-left:79%;
        } */
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

               .guard {
                    /* width: 100%; */
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    /* line-height: 0.1em; */
                    /* margin: 10px 0 20px; */
                    /* font-family: serif; */

               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }
          }




          /* Image Grig */


          * {
               box-sizing: border-box;
          }

          body {
               margin: 0;
               font-family: Arial;
          }

          .header {
               text-align: center;
               padding: 32px;
          }

          .row {
               display: -ms-flexbox;
               /* IE10 */
               display: flex;
               -ms-flex-wrap: wrap;
               /* IE10 */
               flex-wrap: wrap;
               padding: 0 4px;
          }

          /* Create four equal columns that sits next to each other */
          .column {
               -ms-flex: 25%;
               /* IE10 */
               flex: 25%;
               max-width: 25%;
               padding: 0 4px;
          }

          .column img {
               margin-top: 8px;
               vertical-align: middle;
               width: 100%;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }

          #headings {
               font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }

          @media screen and (max-width: 800px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          @media screen and (max-width: 600px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          Responsive layout - makes a two column-layout instead of four columns */ @media screen and (max-width: 800px) {
               .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
               }
          }

          Responsive layout - makes the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 600px) {
               .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
               }
          }
     </style>

</head>

<body>

     <nav class="navbar navbar-expand-xl ">

          <div class=" flex-row-reverse left ">

               <div class="p-2">
                    <div class="icon2">
                         <a href="CartPage.php"> <i class="fa"
                                   style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                         <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                    </div>
               </div>
               <div class="p-2 ml-5"><i class='far fa-user-circle'
                         style='font-size:30px; color: green;margin-top:2px;'></i></div>
               <a class="float-left" href="bhome.php">
                    <img src="farmer.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
               </a>
          </div>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 "
                         style="color:green;margin-right:-9%;font-size:28px;"></i></span>
          </button>
          <a class="float-left" href="bhome.php">
               <img src="farmket.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

               <div class="input-group mb-1 ml-2 searchbox">
                    <div class="input-group-prepend">
                         <div class="input-group-text"><i class="fas fa-search"
                                   style="font-size:20px;color:green; "></i></div>
                    </div>
                    <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                         <input type="text" class="form-control " id="inlineFormInputGroup" name="search"
                              placeholder="Search for fruits,vegetables or crops " style="width:500px;">
                    </form>
                    <a href="bhome.php" class="nav-link">Home</a>
                    <a href="product.php" class="nav-link">Product</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
               </div>
               <?php
               getUsername();
               ?>
               <div class="list-group moblists">

                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<a href='BuyerProfileDetails.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                         echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
                         echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                    } else {
                         echo "<a href='../auth/login.html' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
                    }
                    ?>

               </div>
          </div>

          <div class=" flex-row-reverse right ">
               <div class="p-2 cart">
                    <div class="icon2">
                         <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                         <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                    </div>
               </div>
               <div class="dropdown p-2 settings ">
                    <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <?php
                         if (isset($_SESSION['phonenumber'])) {
                              echo "<a href='BuyerProfileDetails.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                              echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                              echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
                         } else {
                              echo "<a href='../auth/login.html' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
                         }
                         ?>
                    </div>
               </div>
               <div class="text-success  login">Login</div>
          </div>
     </nav>
     <div class="container">
          <div class="heading">
               <h2 class="text-center">Category</h2>
          </div>
          <div class="d-flex justify-content-around bg-white mb-3">
               <?php
               $select_category = "SELECT * FROM `categories`";
               $result_category = mysqli_query($con, $select_category);
               while ($row_category = mysqli_fetch_assoc($result_category)) {
                    $category_title = $row_category['cat_title'];
                    $category_id = $row_category['cat_id'];
                    echo "<div class='p-2'>";
                    echo "<div class='dropdown'>";
                    echo "<button class='btn btn-green mybtn' type='button'><a href='../BuyerPortal2/Categories.php?product_cat=$category_id'>$category_title</a></button>";
                    echo "</div>";
                    echo "</div>";
               }
               ?>
          </div>
          </div>

          <div class="container ">
               <br>
               <div class="row">
                    <?php
                    cart();
                    ?>
                    <?php
                    if (isset($_GET['search'])) {

                         $search_query = $_GET['search'];
                         $get_pro = "select * from products where product_keywords like '%$search_query%'";
                         $run_pro = mysqli_query($con, $get_pro);
                         $count = mysqli_num_rows($run_pro);
                         if ($count > 0) {
                              echo "<br>";
                              while ($rows = mysqli_fetch_array($run_pro)) {
                                   $product_id = $rows['product_id'];
                                   $product_title = $rows['product_title'];
                                   $product_image = $rows['product_image'];
                                   $product_price = $rows['product_price'];
                                   $product_delivery = $rows['product_delivery'];
                                   $farmer_fk = $rows['farmer_fk'];
                                   $farmer_name_query = "select farmer_name from farmerregistration where farmer_id = $farmer_fk";
                                   $running_query_name = mysqli_query($con, $farmer_name_query);
                                   while ($names = mysqli_fetch_array($running_query_name)) {
                                        $name = $names['farmer_name'];
                                   }
                                   echo "
                                        <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
                                             <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                                                  <br>
                                                  <div class='mt-0'><b>
                                                       <h4><img src='iconsmall.png' style='width: 28px; margin-bottom:  10px;'> $name
                                                       </b></h4>
                                                  </div>
                                                  <a href='../BuyerPortal2/ProductDetails.php?id=$product_id'>
                                                  <img class='card-img-top' src='../Admin/product_images/$product_image' alt='Card image cap' height='300px'>
                                                  </a>
                                                  <form action = '' method = 'post'>
                                                       <div class='card-body pb-0'>
                                                            <div class='row'>
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                                                      <div class='input-group mb'>
                                                                           <div class='input-group-prepend'>
                                                                                <h5 class='card-title font-weight-bold'>$product_title</h5>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                        
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                                                 <div class='input-group mb-1'>
                                                                      <div class='input-group-prepend'>
                                                                           <span class='input-group-text bg-warning border-secondary p-1' style='color:black;' id='inputGroup-sizing-default' placeholder='1'><b>Quantity</b></span>
                                                                      </div>
                                                                      <input type='number' class='form-control' aria-label='Default' style='margin-top:0%;width:20%;padding:0%;' aria-describedby='inputGroup-sizing-default'>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <p class='card-text mb-2 font-weight-bold'>PRICE:- $product_price Rs/kg</p>
                                                       <div class='row'>
                                                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                                                                      <button class='btn btn-warning border-secondary mr-1 ' name='cart' type = 'submit' style='color:black ;font-weight:50px;'>Add to cart<img src='carticons.png' height='20px'></button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>";
                                   if (isset($_POST['cart'])) {

                                        if (isset($_POST['quantity'])) {
                                             $qty = mysqli_real_escape_string($con, $_POST['quantity']);
                                        } else {
                                             $qty = 1;
                                        }
                                        global $con;
                                        if (isset($_SESSION['phonenumber'])) {

                                             $sess_phone_number = $_SESSION['phonenumber'];

                                             $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                                             $run_check = mysqli_query($con, $check_pro);

                                             if (mysqli_num_rows($run_check) > 0) {
                                                  echo "";
                                             } else {
                                                  $subtotal = $product_price * $qty;
                                                  $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                                                  $run_insert_pro = mysqli_query($con, $insert_pro);

                                                  echo "<script>window.location.reload(true)</script>";
                                             }
                                        } else {
                                             echo "<script>window.alert('Please Login First!');</script>";
                                        }
                                   }
                              }
                         } else {
                              echo "<br><br><hr><h1 align = center>Product Not Available !</h1><br><br><hr>";
                         }
                    }
                    ?>
               </div>
               <br><br>


          </div>
          </div>
          <!-- footer -->
          <section id="footer" class="myfooter">
               <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                         <div class="col aligncenter">
                              <br>
                              <h5>Payment Option</h5>
                              <img src="../Images/Website/esewa.png" alt="paytm">
                              <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                              <ul class="list-unstyled list-inline social text-center">
                                   <li class="list-inline-item"><a href="javascript:void();"><i
                                                  class="fa fa-facebook"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();"><i
                                                  class="fa fa-twitter"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();"><i
                                                  class="fa fa-instagram"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();"><i
                                                  class="fa fa-google-plus"></i></a></li>
                                   <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                                  class="fa fa-envelope"></i></a></li>
                              </ul>
                         </div>
                         </hr>
                    </div>
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                              <p><u><a href="https://www.Farmket.com/">Farmket Corporation</a></u> is a Multitrading
                                   Company for farmers ang traders</p>
                              <p class="h6">Copy All right Reversed.<a class="text-green ml-2"
                                        href="https://www.farmket.com" target="_blank">Farmket</a></p>
                         </div>
                         </hr>
                    </div>
               </div>
          </section>
</body>

</html>