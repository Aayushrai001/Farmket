<?php
include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "SELECT * FROM buyerregistration WHERE buyer_phone = $sessphonenumber";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $password = $row['buyer_password'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
</head>

<style>
     h1 {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        text-align: center;
    }

    textarea {
        font-size: 20px;
        border-radius: 15px;
        text-align: center;
        border-color: black;
        background-color: transparent;
        margin-top: 10px;
    }

    .box {
        color: black;
        width: 450px;
        line-height: 40px;
        margin: auto;
        text-align: center;
        margin-top: 50px;
        padding: 5px;
        border-style: outset;
        border-radius: 16px;
        border-color: black;
        
    }

    body {
        background-position: center;
        background-color: white;
        border: chartreuse;
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
    }

     .submit{
        cursor: pointer;
        font-size: 22px;
        font-weight: bold;
        color: white;
        background-color: #274C5B;
        border-radius: 16px;
        border-color: black;
        width: 64%;
    }

    input[type="submit"]:hover {
        background-color: #274C5B;
        outline: none;
        border-color: black
        color: white;
        border-radius: 20px;
        border-style: outset;
        border-color: black;
        font-weight: bolder;
        width: 54%;
        font-size: 18px;
    }

    .one {
        height: 100px;
        border-radius: 13px;

    }

    .two {
        width: 100px;
        font-size: 34px;
        background: transparent;
        border: 3px;
        border-color: green;
        border-style: solid;
        border-width: 2px;


    }

    .just {

        float: left;
        margin-left: 1%;
        margin: 20px;
        position: absolute;
        left: 0;
        top: 0px;
        text-shadow: 1px 1px 1px black;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<div class="just">
        <a  href="index.php"> <i  class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1>CHANGE PASSWORD</h1>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Current Password :</b></label>
                    </td>
                    <td>
                        <input type="password" name="currentpassword" placeholder="Current Password" required /> <br>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>New Password :</b></label>
                    </td>
                    <td>
                        <input type="password" name="newpassword" placeholder="New Password" required /> <br>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Re-enter Password :</b></label>
                    </td>
                    <td>
                        <input type="password" name="confirmpassword" placeholder="Confirm New Password" required /> <br>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input class="submit" type="submit" name="confirm" value="Confirm" /> <br>
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

        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '2345678910111211';
        $encryption_key = "DE";

        $encryption1 = openssl_encrypt(
            $currentpassword,
            $ciphering,
            $encryption_key,
            $options,
            $encryption_iv
        );
        $encryption2 = openssl_encrypt(
            $newpassword,
            $ciphering,
            $encryption_key,
            $options,
            $encryption_iv
        );

        if (strcmp($password, $encryption1) == 0 && $newpassword === $confirmpassword) {
            $query = "UPDATE buyerregistration 
                      SET buyer_password = '$encryption2', buyer_conf_pswd = '$confirmpassword'
                      WHERE buyer_phone = $sessphonenumber";
            $run = mysqli_query($con, $query);

            if ($run) {
                echo "<script>alert('Password Updated Successfully!');</script>";
                echo "<script>window.open('BuyerProfile.php','_self')</script>";
            } else {
                echo "<script>alert('Error updating password');</script>";
            }
        } else {
            echo "<script>alert('Please enter valid details');</script>";
        }
    }
    ?>
</body>

</html>
