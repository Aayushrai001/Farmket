<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../Styles/buyer_reg.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Buyer Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

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


        .mybtn {
            border-color: green;
            border-style: solid;
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

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
            width: 100%;
        }

        .my-form,
        .login-form {
            font-family: sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            /* .mycarousel {
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
        } */

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
        }
    </style>
</head>

<body>
    <main class="my-form">
        <!-- Main content area -->
        <div class="cotainer">
            <!-- Container to hold the form -->
            <div class="row justify-content-center">
                <!-- Center the form horizontally -->
                <div class="col-md-8">
                    <!-- Bootstrap grid column -->
                    <div class="card">
                        <!-- Card for styling -->
                        <div class="card-header" style="background-color:#292b2c">
                            <!-- Header section of the card -->
                            <h4 style="font-style:bold;color:goldenrod">Register</h4>
                            <!-- Register title -->
                        </div>
                        <div class="card-body border border-dark">
                            <!-- Body section of the card -->
                            <form name="my-form" action="BuyerRegistration.php" method="post">
                                <!-- Registration form -->
                                <!-- Form group for full name input -->
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-user mr-2"></i><b>Full Name</b></label>
                                    <!-- Label for full name -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <input type="text" id="full_name" class="form-control border border-dark"
                                            name="name" placeholder="Enter Your Name" required>
                                        <!-- Full name input field -->
                                    </div>
                                </div>
                                <!-- End of full name form group -->

                                <!-- Form group for phone number input -->
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right "><i
                                            class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
                                    <!-- Label for phone number -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <input type="text" id="phone_number"
                                            class="form-control w-100 border border-dark"
                                            style="width:100% ! important;" name="phonenumber"
                                            placeholder="Phone Number" required>
                                        <!-- Phone number input field -->
                                    </div>
                                </div>
                                <!-- End of phone number form group -->

                                <!-- Form group for email address input -->
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><i
                                            class="far fa-envelope mr-2"></i><b>E-Mail Address</b></label>
                                    <!-- Label for email address -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <input type="email" id="email_address" class="form-control border border-dark"
                                            name="mail" placeholder="E-Mail ID" required>
                                        <!-- Email address input field -->
                                    </div>
                                </div>
                                <!-- End of email address form group -->

                                <!-- Form group for present address input -->
                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-home mr-2"></i><b>Present Address</b></label>
                                    <!-- Label for present address -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <textarea type="text" id="present_address"
                                            class="form-control border border-dark" rows="4" name="address"
                                            placeholder="Address" required></textarea>
                                        <!-- Present address input field -->
                                    </div>
                                </div>
                                <!-- End of present address form group -->

                                <!-- Form group for username input -->
                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-user mr-2"></i><b>User Name</b></label>
                                    <!-- Label for username -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <input type="text" id="user_name" class="form-control border border-dark"
                                            name="username" placeholder="Username" required>
                                        <!-- Username input field -->
                                    </div>
                                </div>
                                <!-- End of username form group -->

                                <!-- Form group for password input -->
                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right "><i
                                            class="fas fa-lock mr-2"></i><b>Password</b></label>
                                    <!-- Label for password -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <input id="p1" class="form-control border border-dark" type="password"
                                            name="password" placeholder="Password" required>
                                        <!-- Password input field -->
                                    </div>
                                </div>
                                <!-- End of password form group -->

                                <!-- Form group for confirm password input -->
                                <div class="form-group row">
                                    <label for="p2" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
                                    <!-- Label for confirm password -->
                                    <div class="col-md-6">
                                        <!-- Bootstrap grid column for input -->
                                        <input id="p2" class="form-control border border-dark" type="password"
                                            name="confirmpassword" placeholder="Confirm Password" required>
                                        <!-- Confirm password input field -->
                                    </div>
                                </div>
                                <!-- End of confirm password form group -->

                                <div class="col-md-6 offset-md-4">
                                    <!-- Button to submit the form -->
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color:#292b2c;color:goldenrod" name="register"
                                        value="Register">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
<?php
// Including the database connection file
include ("../Includes/db.php");
// Checking if the register form is submitted
if (isset($_POST['register'])) {
    // Escaping special characters from form inputs to prevent SQL injection
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    // Checking if the password and confirm password match
    if (strcmp($password, $confirmpassword) == 0) {
        // Creating the SQL query to insert user data into the database
        $query = "INSERT INTO buyerregistration (buyer_name, buyer_phone, buyer_addr, buyer_mail, buyer_username, buyer_password) 
            VALUES ('$name', '$phonenumber', '$address','$mail', '$username', '$password')";
        // Running the query to insert data
        $run_register_query = mysqli_query($con, $query);
        // Displaying success message and redirecting to the login page
        echo "<script>alert('Successfully Inserted');</script>";
        echo "<script>window.open('BuyerLogin.php', '_self')</script>";
    } else {
        // Displaying an alert if password and confirm password do not match
        echo "<script>alert('Password and Confirm Password Should be same');</script>";
    }
}
?>