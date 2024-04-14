<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Category</title>
    <!-- Include CSS stylesheets here -->
    <style>
        h1{
            display: block;
            text-align: center;
        }
        label{
            display: block;
            text-align: center;
        }
        input[type="text"] {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        /* Style the button */
        .btn {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: lightgreen;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Insert Category</h1>
    <form action="insert_category.php" method="POST">
        <label for="cat_title"><h2>Category Title:</h2></label>
        <input type="text" id="cat_title" name="cat_title" required>
        <button class="btn" type="submit" name="submit">Insert</button>
        <button class="btn"><a href="admin_dashboard.php">Back</a></button>
    </form>

    <?php
// Include your database connection file
include("../includes/db.php");

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Establish database connection if not already done
    global $con;

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


    <!-- Include JavaScript files here -->
</body>
</html>
