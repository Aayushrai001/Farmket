<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Product</title>
<style>

.container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: white;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
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
    border: 1px solid black;
    color: white;
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
    background-color: black;
    color: white;
}
</style>
</head>
<body>
<div class="container">
  <h1>Delete Product</h1>
  <form action="delete_product.php" method="POST">
    <div class="form-group">
      <label for="farmer_fk">Farmker ID:</label>
      <input type="text" id="farmer_fk" name="farmer_fk" required>
    </div>
    <div class="form-group">
      <label for="product_title">Product Title:</label>
      <input type="text" id="product_title" name="product_title" required>
    </div>
    <button type="submit">Delete Product</button>
  </form>
</div>
</body>
</html>

<?php
// Include your database connection file
include("./includes/db.php");

$successMessage = ""; // Initialize an empty variable to store success message

// Check if form is submitted and if the required fields are set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['farmer_fk']) && isset($_POST['product_title'])) {
    // Get form data
    $farmer_fk = $_POST['farmer_fk'];
    $product_title = $_POST['product_title'];

    // Check if the database connection is successful
    if ($con) {
        // Prepare and execute the SQL query to delete the product
        $sql = "DELETE FROM products WHERE farmer_fk = '$farmer_fk' AND product_title = '$product_title'";

        if ($con->query($sql) === TRUE) {
            $successMessage = "Product deleted successfully!";
        } else {
            echo "<script>alert('Error deleting product: " . $con->error . "');</script>";
        }

    } else {
        echo "<script>alert('Database connection error. Please check your connection settings.');</script>";
    }
}
// Close connection
$con->close();
?>


