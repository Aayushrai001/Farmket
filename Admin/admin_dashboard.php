<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Your existing CSS styles here */

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .php-content {
            display: none;
            padding: 20px;
        }

        .loaded-content {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            position: relative;
        }

        .nav {
            background-color: #f0f0f0;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            margin-bottom: 0; /* Remove the gap */
        }

        .footer {
            position: absolute;
            margin-top: 20px;
            bottom: 0; /* Place the footer at the bottom */
            width: 100%;
            padding: 20px; /* Adjust the padding as needed */
            background-color: #f0f0f0;
            text-align: center;
            
        }

        .nav button {
            margin: 5px;
            padding: 10px;
        }

        h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 0;
            background-color: #f0f0f0;
        }

        .main {
            margin-top: 100px; /* Adjust this margin as needed */
        }
    </style>
</head>
<body>
<h1>Admin Dashboard</h1>
<div class="center-content">
    <nav class="nav">
        <div>
            <img src="../Images/Website/admin.png">
            <button id="insertCategoryBtn">Insert Category</button>
            <button id="insertProductBtn">Insert Product</button>
            <button id="orderListBtn">Order List</button>
        </div>
    </nav>
    <main class="main">
        <div class="php-content" id="phpContent"></div>
    </main>
</div>
<div class="footer">
    <p>All rights reserved @- Designed by Farmket-2024</p>
</div>

<script>
    document.getElementById("insertCategoryBtn").addEventListener("click", function() {
        window.location.href = "insert_category.php";
    });

    document.getElementById("insertProductBtn").addEventListener("click", function() {
        window.location.href = "insert_product.php";
    });

    document.getElementById("orderListBtn").addEventListener("click", function() {
        window.location.href = "order_list.php";
    });
</script>
</body>
</html>
