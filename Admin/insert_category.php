<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Category</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */

        h1 {
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
</head>
<body>
        <h1>Insert Category</h1>
        <form action="insert_category.php" method="POST">
            <label for="cat_title">Category Title:</label>
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
</body>
</html>

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
        echo "<script>window.open('admindash.php','_self')</script>";
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
        echo "<script>window.open('admindash.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
