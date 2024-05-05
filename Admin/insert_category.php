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
    <h1>Insert Category</h1>
        <form action="insert_category.php" method="POST">
            <label for="cat_title">Enter Category:</label>
            <input type="text" id="cat_title" name="cat_title" required>
            <button class="btn" type="submit" name="submit">Insert</button>
        </form>

        <h2>Category List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Category Title</th>
                <th>Action</th>
            </tr>
            <?php
            // Include your database connection file
            include("../includes/db.php");

            // Fetch and display data from the categories table
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['cat_id'] . "</td>";
                    echo "<td>" . $row['cat_title'] . "</td>";
                    echo "<td><form method='POST' action='insert_category.php'>";
                    echo "<input type='hidden' name='cat_id' value='" . $row['cat_id'] . "'>";
                    echo "<button type='submit' name='delete' class='btn delete-btn'>Delete</button>";
                    echo "</form></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No categories found</td></tr>";
            }
            ?>
        </table>
</div>
<?php
// Include your database connection file
include("../includes/db.php");

// Check if form is submitted and delete button is clicked
if (isset($_POST['delete'])) {
    // Sanitize and validate input
    $cat_id = mysqli_real_escape_string($con, $_POST['cat_id']);

    // Delete category from categories table
    $sql = "DELETE FROM categories WHERE cat_id = '$cat_id'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Category has been deleted')</script>";
        echo "<script>window.open('insert_category.php','_self')</script>";
    } else {
        echo "Error deleting category: " . mysqli_error($con);
    }
}

// Check if form is submitted for inserting
if (isset($_POST['submit'])) {
    // Sanitize and validate input
    $cat_title = mysqli_real_escape_string($con, $_POST['cat_title']);

    // Insert data into categories table
    $sql = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Category has been added')</script>";
        echo "<script>window.open('insert_category.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
</body>
</html>
