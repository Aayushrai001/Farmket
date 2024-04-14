<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Farmket</title>
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
.proicon {
    float: right;
    margin-right: 10px;
    margin-top: 20px;
}

.dropdown {
    float: right;
    margin-right: 30px;
    margin-top: 20px;
}

.icon2 {
    float: right;
    margin-right: 30px;
    margin-top: 20px;
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
.texts{
    display: flex;
    justify-content: center;
}
.texts{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0%;
    margin-top: 2%;
}
.container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 5%;
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
    }
.content {
        max-width: 1000px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 18px rgba(0, 0, 0, 0.1);
        display: flex;
        width: 100%;
        height: auto;
        margin-top: 10%;
        border-radius: 18px;
}
.image {
        margin-top: 0%;
        width: 450px;
        height: 550px;
}
.content .text {
        padding: 0 20px;
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
        <!--?php getUsername(); ?-->
    </div>
    </div>
    <h1 class="texts">About Us</h1>
        <div class="container">
            <div class="content">
        <img src="../Images/Website/home_pic.jpg" alt="" class="image">
        <div class="text">
            <h1>About Farmket</h1>
            <p>Welcome to Farmket, your one-stop destination for fresh farm products. We are passionate about delivering high-quality, organic produce directly from local farms to your doorstep.</p>
            <p>At Farmket, we believe in supporting sustainable agriculture practices and promoting healthy living through natural foods. Our team works closely with farmers to ensure that every product meets our strict quality standards.</p>
            <p>Explore our wide range of farm-fresh fruits, vegetables, dairy products, and more. Join us in our mission to make healthy eating accessible to everyone!</p>
        </div>
        </div>
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
