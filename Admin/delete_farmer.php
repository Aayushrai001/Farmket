<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Farmer</title>
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
</style>
</head>
<body>
<div class="container">
  <h1>Delete Farmer</h1>
  <form action="delete_farmer.php" method="POST">
    <div class="form-group">
      <label for="farmer_id">Farmer ID:</label>
      <input type="text" id="farmer_id" name="farmer_id" required>
    </div>
    <div class="form-group">
      <label for="farmer_name">Farmer Name:</label>
      <input type="text" id="farmer_name" name="farmer_name" required>
    </div>
    <button type="submit">Delete Farmer</button>
  </form>
</div>
</body>
</html>

<?php
// Include your database connection file
include("./includes/db.php");

$successMessage = ""; // Initialize an empty variable to store success message

// Check if form is submitted and if the required fields are set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['farmer_id']) && isset($_POST['farmer_name'])) {
    // Get form data
    $farmer_id = $_POST['farmer_id'];
    $farmer_name = $_POST['farmer_name'];

    // Check if the database connection is successful
    if ($con) {
        // Prepare and execute the SQL query to delete the farmer
        $sql = "DELETE FROM farmerregistration WHERE farmer_id = '$farmer_id' AND farmer_name = '$farmer_name'";

        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Farmer has been deleted.')</script>";
            echo "<script>window.open('admindash.php','_self')</script>";
        } else {
            echo "<script>alert('Error deleting farmer: " . $con->error . "');</script>";
        }

    } else {
        echo "<script>alert('Database connection error. Please check your connection settings.');</script>";
    }
}
// Close connection
$con->close();
?>



