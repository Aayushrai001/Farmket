
<?php
    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = '$sessphonenumber'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['buyer_name'];
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
    <title>Buyer Profile</title>
    <style>
        h1 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
        }
        textarea{
            font-size:25px;
            border-radius:25px;
            text-align:center;
        }
        
        .box {
            color: black;
            width: 500px;
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
            border: chartreuse;
        }
        
        form {
            margin: 10px;
            padding: 10px;
            background-color: white);
        }
        
        input {
            padding: 5px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: #274C5B;
            border-radius: 16px;
            border-color: black;
            width: 44%;
            padding: 15px;
        }
        
        input[type="submit"]:hover {
                background-color: #274C5B;
                outline: none;
                color:  rgb(255,255,255);
                border-radius: 20px;
                border-style: outset;
                border-color: rgb(0, 57, 230);
                font-weight: bolder;
                width: 54%;
                font-size: 18px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="just">
        <a  href="index.php"> <i  class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="BuyerEditProfile.php" method="post">

            <table align = "center">
                <tr colspan = 2>
                    <h1> BUYER'S  PROFILE</h1>
                </tr>

                <tr align = "center">
                    <td><label><b>Name :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $name?> </textarea><br></td>
                </tr>

                <tr align = "center">
                    <td><label><b>User Name :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $user?> </textarea><br></td>
                </tr>

                <tr align = "center">
                    <td><label><b>Address :</b></label></td>
                    <td><textarea rows="3" column="56" disabled> <?php echo $address?> </textarea><br></td>
                </tr>

                <tr align = "center">
                    <td><label><b>Mail ID :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $mail?> </textarea><br></td>
                </tr>
                
                <tr colspan =2 align = "center">
                    <td colspan =2><input type = "submit" name="editProf" value= "Edit Profile"></td>
                </tr>
            </table>
            
        </form>
 
    </div>

</body>
</html>