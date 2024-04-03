<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet" href="../index.css">
    <style>
        .admin {
            width: 150px;
            object-fit: contain;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
        .my-3{
            width:225px;
        }
    </style>
    <!--font link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- Second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../image/admin.png" alt="" class="admin"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link  bg-info my-1">Insert Products</a></button>
                    <button class="my-3"><a href="" class="nav-link  bg-info my-1">View Products</a></button>
                    <button class="my-3"><a href="index.php?insert_category" class="nav-link  bg-info my-1">Insert Categories</a></button>
                    <button class="my-3"><a href="" class="nav-link  bg-info my-1">View Categories</a></button>
                    <button class="my-3"><a href="" class="nav-link  bg-info my-1">All Orders</a></button>
                    <button class="my-3"><a href="" class="nav-link  bg-info my-1">All Payments</a></button>
                    <button class="my-3"><a href="" class="nav-link  bg-info my-1">List User</a></button>
                    <button class="my-3"><a href="" class="nav-link  bg-info my-1">LogOut</a></button>
                </div>
            </div>
        </div>
        <!-- Fourth child -->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('Insert_categories.php');
        }
        ?>
    </div>
    <!-- Last child -->
    <div class="bg-info p-3 text-center footer">
        <p>All rights reserved @- Designed by Farmket-2024</p>
    </div>
    </div>   
    
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
