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

.footer {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
    font-size: 20px;
	margin-top: 3px;
}
.slogan{
	margin-top: 15%;
	font-size: 20px;
}
.contact-us{
	margin-top: 5%;
	font-size: 20px;
	margin-left: 5%;
}
.left-side, .right-side {
    flex-basis: calc(50% - 1px);
}
.contact-heading{
	font-size: 35px;
}

.imgs{
	width: 25px;
	height: 20px;
}
.imgss{
	width: 25px;
	height: 25px;
}
</style>
</head>
<body>
	<div class="header">
		<a href="BuyerHomepage.php"><img id="logo" src="../Images/Website/logo (3).jpg"></a>
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
				if (isset($_SESSION['phonenumber'])) {
					//used to go to user profile page
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";
					//
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";
                    //used to redirect to buypage
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransactions.php'><label class='makeitgreen'>Transactions</label></a></li>";
                    // used to got to buyer page
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Subscription</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmers</label></a></li>";
					//used to go to log out page
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
				} else {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
				}
				?>
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
      getproduct();
      ?>
    </div>
  </div>
</div>
<div class="option">
	<button type="button">See More</button>
</div>
  
<div class="footer">
    <div class="left-content">
        <div class="slogan">
            <p>Farmket: Where organic goodness grows abundantly, from farm to table.</p>
        </div>
		<div class="copyright">
            <span class="copyright-text"><h3>Copyright ©</span><span class="brand-name">Farmket 2024, Kathmandu</h3></span>
        </div>
    </div>
    <div class="right-side">
        <div class="contact-us">
            <div class="contact-heading">Contact Us</div>
            <div class="contact-info">
                <p><strong>Email:</strong><br><img class="imgs" src="../Images/Website/gmail.jpg" alt="Email Logo">farmket@Organicfood.com</p>
                <p><strong>Phone:</strong><br><img class="imgss" src="../Images/Website/phone.jpg" alt="Phone Logo"> +977 9861813030<br><img class="imgss" src="../Images/Website/phone.jpg" alt="Phone Logo"> +977 9818603797</p>
            </div>                               
        </div>
    </div>
</div>
</body>

</html>