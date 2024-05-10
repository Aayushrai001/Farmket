<?php

    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = $sessphonenumber";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['buyer_name'];
        $phone = $row['buyer_phone'];
        $address = $row['buyer_addr'];
        $mail = $row['buyer_mail'];
        $user = $row['buyer_username'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
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
            border-width: 5px;
            border-radius: 16px;
            border-color:black;
        
        }
        
        body {
            background-position: center;
            background-color: white;
        }
        
        #innerbox {
            margin: 10px;
            padding: 10px;
            background-color: black;
        }
        
        input {
            padding: 7px;
            margin: 10px;
             border-color:black;
            display: inline-block;
            border-radius: 16px;
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: white;
            background-color: black;
            border-radius: 16px;
            border-color: black;
            width: 44%;
        }
        
        input[type="submit"]:hover {
                background-color: black;
            outline: none;
            color: white;
            border-radius: 20%;
            border-style: outset;
            border-color: black;
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }
        textarea{
             border-width: 3px; 
             border-radius: 16px; 
             border-color:black;
            
            
        }
   
            
        .in-icons {
           text-align: center;
        }
            
        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }
        .just{
            float:left;
            margin:0px;
            position:absolute;
            left:0;
             top:0px; 
        
        }
        .again{
            cursor: pointer;
            font-size: 24px; 
            font-weight: bold;
            color: black;
            border-radius: 16px;
            border-color: black;
            width: 44%;
            margin-left:100px;


        }
        .say{
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color:white;
            border-color:black;
            width: 96%;
            padding : 10px;
            padding-left:10px;
            padding-right:10px;
            background-color: black;
            border-radius: 16px;
            border-color: black;    
        }

        .say:hover{
            background-color: black;
            outline: none;
            color:  white;
            border-radius: 20%;
            border-style: outset;
            border-color: black;
            font-weight: bolder;
            width: 80%;
            font-size: 18px;

        }
        .just{
            float:left;
            margin-left:1%;
            margin:20px;
            position:absolute;
            left:0;
            top:0px; 
            text-shadow: 1px 1px 1px black;
        }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
    

    <div class="just">
        <a  href="bhome.php"> <i  class="fa fa-home fa-4x"></i></a>
    </div>


    <div class="box">
       <!-- <div id = "innerbox"> -->
        <form action="" method = "post">
             <table align = "center" >

                <tr colspan = 2>
                    <h1> EDIT PROFILE</h1>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>Name :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $name;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>Email ID :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $mail;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                    <label><b>Username :</b></label>
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $user; ?>" />  <br> 
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>Phone :</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone;?>"/> <br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>Address :</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address;?> "/> <br>
                    </td>
                </tr>

                <tr colspan =2 align = "center">
                    <td colspan =2>
                        <input type="submit" name="confirm" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>
        <div class="again">
            <td colspan =2><a href="BuyerChangePassword.php"><button class="say">Change Password</button></a></td>
        </div>
 
    </div>
  


</body>
</html>

<?php

    include("../Includes/db.php");

    if (isset($_POST['confirm']))
    {
        $phone = mysqli_real_escape_string( $con,$_POST['phonenumber']);
        $address = mysqli_real_escape_string( $con,$_POST['address']);
        $account = mysqli_real_escape_string( $con,$_POST['bank']);   
        $user = mysqli_real_escape_string( $con,$_POST['username']);   
        
        $query = "update buyerregistration 
                  set buyer_phone = '$phone', buyer_username = '$user', 
                  buyer_addr = '$address', buyer_bank = '$account' 
                  where buyer_id in 
                  (select buyer_id from buyerregistration 
                  where buyer_phone='$sessphonenumber')"; 
        echo $query;
        $run = mysqli_query($con, $query);
        if ($run) {
            echo '<script>alert("Profile updated successfully!");</script>';
            $_SESSION['phonenumber'] = $phone;
            echo "<script>window.open('BuyerEditProfile.php','_self')</script>";
        } else {
            echo '<script>alert("Error updating profile. Please try again.");</script>';
        }
    }
?>