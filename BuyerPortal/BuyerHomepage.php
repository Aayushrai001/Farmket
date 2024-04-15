<?php
	include("../Functions/functions.php");
	include("../Includes/db.php");
	?> 

<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Framket</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../portal_files/bootstrap.min.css">
	<script src="../portal_files/jquery.min.js.download"></script>
	<script src="../portal_files/popper.min.js.download"></script>
	<script src="../portal_files/bootstrap.min.js.download"></script>
	<style>
		*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.header {
    position: sticky;
    z-index: 100;
    top: 0rem;
    height: 80px;
    width: 100%;
    background-color: #00b300;
}

#logo {
    height: 80px;
    width: 100px;
    text-align: left;
    float: left;
}

.search_input {
    clear: none;
    float: left;
    margin-left: 20px;
    margin-top: 20px;
}
.fas {
	border-radius: 35px;
}
.dropdown {
		float: right;
		margin-right: 80px;
		margin-top: 30px;
		margin-bottom: 0%;
}
.dropdown-menu{
	background-color: green;
    text-align: left; 
    left: 50%; 
    transform: translateX(-50%); 
}
.makeitgreen{
	color: White;
	background-color: green;
}
.icon2 {
	    float: right;
	    margin-right: 25px;
		margin-left: 0%;
	    margin-top: 20px;
        padding: 10px;
}
.proicon {
    float: right;
    margin-right: 25px;
	margin-left: 0%;
    margin-top: 20px;
	padding: 10px;
}
.loginz {
    float: right;
    margin-right: 20px;
    margin-top: 20px;
}
/*nav bar*/
.bar{
	color:black;
	font-size: 18px;
	padding: 10px;
	margin-left: 20px;
	cursor: pointer;
	text-decoration-color: transparent;
}
.bar:hover{
	color:black;
	text-decoration-color: white;
}
/*first image*/
.container {
    position: relative;
    width: 100%;
    height: 500px; 
}
.img {
    width: 100%;
    height: 500px;
    object-fit: cover; /* Ensures the image covers the entire container */
}
.text-center{
	margin-bottom: 0%;
	background-color: white;
}
.texts-center{
	background-color: white;
	font-size: 25px;
	text-align: center;
}

.cards {
    position: absolute;
	margin-top: 15%;
    top: 50%;
    left: 30%;
    transform: translate(-50%, -50%);
    width: 350px;
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
    padding: 20px; 
}



.title {
    color: #274C5B;
    font-size: 36px;
    font-family: Yellowtail, cursive;
    font-weight: 400;
    word-wrap: break-word;
}

.subtitle {
    width: 100%;
    color: black;
    font-size: 30px;
    font-family: Roboto, sans-serif;
    font-weight: 800;
    word-wrap: break-word;
}
.card-img-top{
    width:100%;
    height: 200px;
    object-fit: contain;
}
button {
	margin-left: 45%;
	margin-bottom: 0%;
    padding: 15px 35px;
    background-color: #274C5B;
    color: white;
    border-radius: 35px ;
    cursor: pointer;
	border-color: black;
}

button:hover {
	color:black;
    background-color: white;
}

.myfooter {
            background-color: white;
            color: goldenrod;
            margin-top: 15px;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }
        
</style>
</head>
<body>
	<div class="header">
		<a href="BuyerHomepage.php"><img id="logo" src="../Images/Website/farmket.jpg"></a>
		<div class="search_input">
			<form action="SearchResults.php" method="get" enctype="multipart/form-data">
				<i class="fas fa-search" style="font-size:20px;color:white;"></i>
				<input type="text" id="input1" name="search" placeholder="Search...">
				<a class="bar" href="index.php">Home</a>
				<a class="bar" href="#product">Product</a>
				<a class="bar" href="aboutus.php">About Us</a>
			</form>
		</div>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
			<ul class="dropdown-menu etc">
				<?php
				echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
				?>
			</ul>
				
		</div>
		<div class="proicon">
			<?php
			if (!isset($_SESSION['phonenumber'])) {
				echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
			} else {
				echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
			}
			?>
		</div>

		<div class="icon2">
			<a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
			<span id="icon"> <!--?php echo totalItems(); ?--> </span>
		</div>

		<div class="loginz">
			<?php 
            getUsername(); 
            ?>
		</div>

		<img class="img" src="../Images/Website/back.jpg"/>
		<div class="cards">
				<div class="title">100% Natural Food</div>
				<div class="subtitle">Choose the best <br>healthier way<br>of life</div>
		</div>

<div class="bg-light">
  <h1 class="text-center">Farmket Store</h1>
  <p class="texts-center">Coustomer satisfaction is the heart of Farmket</p>
</div>
<!--fourt chaild-->
<div class="row">
  <div class="col-md-13 p-3">
    <!--product-->
    <div class="row">
      <?php
      getproducts();
      ?>
    </div>
  </div>
</div>
<div class="option">
	<button type="button">See More</button>
</div>
  
<<section id="footer" class="myfooter">
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
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                    <p><u><a href="https://www.Farmket.com/">Farmket Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                    <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.farmket.com" target="_blank">farmket</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>
</body>

</html>