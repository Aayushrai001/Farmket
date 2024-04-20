<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = $sessphonenumber";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $password = $row['farmer_password'];
}


?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
        }

        .box {
            color: black;
            width: 400px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: black;
        }

        body {
            background-position: center;
            background-color: white;
            border: black;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: white;
        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: black;
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: white;
            background-color: black;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: black;
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: black;
            outline: none;
            border-color: black;
            color: white;
            border-radius: 20%;
            border-style: outset;
            border-color: black;
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }

        textarea {
            border-width: 3px;
            border-radius: 16px;
            border-color: black;


        }
        .in-icons {
            text-align: center;
        }

        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }

        .just {
            float: left;
            margin: 0px;
            position: absolute;
            left: 0;
            top: 0px;

        }
    </style>
</head>
<body>
    <div class="just">
        <a href="FarmerHomepage.php"> <i class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1>CHANGE PASSWORD </h1>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Current Password :</b></label>
                    </td>
                    <td>
                        <input type="password" name="currentpassword" placeholder="Current Password" /> <br>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>New Password :</b></label>
                    </td>
                    <td>
                        <input type="password" name="newpassword" placeholder="New Password" /> <br>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Re-enter Password :</b></label>
                    </td>
                    <td>
                        <input type="password" name="confirmpassword" placeholder="Confirm New Password" /> <br>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" name="confirm" value="Confirm" /> <br>
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>
            </table>
        </form>
    </div>

    <?php
    if (isset($_POST['confirm'])) {
        $currentpassword = mysqli_real_escape_string($con, $_POST['currentpassword']);
        $newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
        $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
        if ($currentpassword == $password && $newpassword == $confirmpassword){
            $sql = "update farmerregistration 
                    set farmer_password='$newpassword' 
                    where farmer_phone= $sessphonenumber";
            echo $sql;
            $run = mysqli_query($con, $sql);
            echo "<script>alert('Password Updated Sucessfully!');</script>";
            echo "<script>window.open('farmerprofile2.php','_self')</script>";
        } else {
            echo "<script>alert('Please Enter Valid Details');</script>";
            echo "<script>window.open('ChangePassword.php','_self')</script>";
        }
    }
    ?>

</body>

</html>