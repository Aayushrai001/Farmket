<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-rows: auto 1fr;
            grid-template-columns: 200px 1fr;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 30px;
            margin: 0;
            grid-column: 1 / -1;
        }

        .sidebar {
            background-color: #f4f4f4;
            height: 100vh;
            overflow-y: auto;
            grid-row: 2;
            grid-column: 1;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            padding: 10px;
        }

        .sidebar li:hover {
            background-color: #ddd;
        }

        .container {
            padding: 0;
            width: 100%;
        }

        .active {
            background-color: #ccc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: white;
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-btn {
            background-color: #ff5c5c;
        }

        .delete-btn:hover {
            background-color: #ff0000;
        }
    </style>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <div class="sidebar">
        <ul>
            <li><a href="insert_category.php">Insert Category</a></li>
            <li><a href="delete_farmer.php">Delete Farmer</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="../Includes/logout.php">Log Out</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Orders</h1>
        <table>
    <tr>
        <th>User Name</th>
        <th>Phonenumber</th>
        <th>User Address</th>
        <th>Item Name</th>
        <th>Farmer Phonenumber</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Payment</th>
    </tr>
    <?php
    $sql = "SELECT orders.*, buyerregistration.buyer_name, products.product_title 
            FROM orders 
            INNER JOIN buyerregistration ON orders.buyer_phonenumber = buyerregistration.buyer_phone 
            INNER JOIN products ON orders.product_id = products.product_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['buyer_name'] . "</td>"; // Buyer's Name from buyerregistration
            echo "<td>" . $row['buyer_phonenumber'] . "</td>"; // Buyer's Phone Number from orders
            echo "<td>" . $row['address'] . "</td>"; // User Address from orders
            echo "<td>" . $row['product_title'] . "</td>"; // Item Name from products
            echo "<td>" . $row['phonenumber'] . "</td>"; // Farmer's Phone Number from orders
            echo "<td>" . $row['qty'] . "</td>"; // Quantity from orders
            echo "<td>" . $row['total'] . "</td>"; // Price from orders
            echo "<td>" . $row['payment'] . "</td>"; // Payment from orders
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No orders found.</td></tr>";
    }
    ?>
</table>


    </div>
</body>

</html>
