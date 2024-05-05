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
            display: grid; /* Use CSS Grid */
            grid-template-rows: auto 1fr; /* Create two rows: one for the header and one for the rest */
            grid-template-columns: 200px 1fr; /* Create two columns: one for the sidebar and one for the container */
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 30px;
            margin: 0; /* Remove default margin */
            grid-column: 1 / -1; /* Span the full width */
        }

        .sidebar {
            background-color: #f4f4f4;
            height: 100vh;
            overflow-y: auto;
            grid-row: 2; /* Place in the second row */
            grid-column: 1; /* Place in the first column */
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
            padding: 0; /* Remove padding to use full width */
            width: 100%;
        }

        .active {
            background-color: #ccc; /* Style the active menu item */
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

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
<div class="conatin">
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2{
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: lightgreen;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #4CAF50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
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
    <h1>Product</h1>
        <form action="product.php" method="POST">
        </form>
        <h2>Product List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Product title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Description</th>
                <th></th>
            </tr>
            <?php
// Include your database connection file
include("../includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the state option is changed
    if (isset($_POST['action']) && isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        $action = $_POST['action']; // Action can be 'unapproved' or 'approved'

        if ($action == 'unapproved') {
            // Delete the product from the database
            $delete_sql = "DELETE FROM products WHERE product_id=$product_id";
            if (mysqli_query($con, $delete_sql)) {
                echo "<script>alert('Product is deleted')</script>";
                echo "<script>window.open('product.php','_self')</script>";
            } else {
                echo "Error deleting product: " . mysqli_error($con);
            }
        } elseif ($action == 'approved') {
            // Update the state in the database to 'Approved'
            $update_sql = "UPDATE products SET state='Approved' WHERE product_id=$product_id";
            if (mysqli_query($con, $update_sql)) {
                echo "<script>alert('Product state is updated to Approved')</script>";
                echo "<script>window.open('product.php','_self')</script>";
            } else {
                echo "Error updating state: " . mysqli_error($con);
            }
        }
    }
}

// Fetch and display data from the products table where state is 'Unapproved'
$sql = "SELECT * FROM products WHERE state='Unapproved'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['product_id'] . "</td>";
        echo "<td>" . $row['product_title'] . "</td>";
        echo "<td>" . $row['product_cat'] . "</td>";
        echo "<td><img src='../Admin/product_images/" . $row['product_image'] . "' alt='Product Image' style='width: 100px; height: 100px;'></td>";
        echo "<td>" . $row['product_stock'] . "</td>";
        echo "<td>" . $row['product_price'] . "</td>";
        echo "<td>" . $row['product_desc'] . "</td>";
        echo "<td>";
        echo "<form method='POST' action=''>";
        echo "<input type='hidden' name='product_id' value='" . $row['product_id'] . "'>";
        echo "<button type='submit' name='action' value='approved'>Approved</button>";
        echo "<button type='submit' name='action' value='unapproved'>Unapproved</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No unapproved products found.</td></tr>";
}
?>





</table>
</div>
</body>
</html>
