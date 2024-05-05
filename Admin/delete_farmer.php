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

    <div class="container">
        <h1>Delete Farmer</h1>
        <form action="delete_farmer.php" method="POST">
            <div class="form-group">
                <label for="farmer_name">Enter Farmer Name:</label>
                <input type="text" id="farmer_name" name="farmer_name" required>
            </div>
            <button type="submit">Search</button>
        </form>

        <h2>Farmer List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Farmer Name</th>
                <th>Action</th>
            </tr>
            <?php
            // Include your database connection file
            include("../includes/db.php");

            // Check if the delete button is clicked and the farmer ID is set
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete']) && isset($_POST['farmer_id'])) {
                // Get the farmer ID from the form
                $farmer_id = $_POST['farmer_id'];

                // Check if the database connection is successful
                if ($con) {
                    // Prepare and execute the SQL query to delete the farmer
                    $sql = "DELETE FROM farmerregistration WHERE farmer_id = '$farmer_id'";
                    if ($con->query($sql) === TRUE) {
                        echo "<script>alert('Farmer deleted successfully.');</script>";
                    } else {
                        echo "<script>alert('Error deleting farmer: " . $con->error . "');</script>";
                    }
                } else {
                    echo "<script>alert('Database connection failed.');</script>";
                }
            }

            // Check if form is submitted and if the required fields are set
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['farmer_name'])) {
                // Get form data
                $farmer_name = $_POST['farmer_name'];

                // Check if the database connection is successful
                if ($con) {
                    // Prepare and execute the SQL query to search for the entered farmer name
                    $sql = "SELECT * FROM farmerregistration WHERE farmer_name LIKE '%$farmer_name%'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['farmer_id'] . "</td>";
                            echo "<td>" . $row['farmer_name'] . "</td>";
                            echo "<td><form method='POST' action='delete_farmer.php'>";
                            echo "<input type='hidden' name='farmer_id' value='" . $row['farmer_id'] . "'>";
                            echo "<button type='submit' name='delete' class='btn delete-btn'>Delete</button>";
                            echo "</form></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No results found.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Database connection failed.</td></tr>";
                }
            } else {
                // If no search is performed, display the first 7 farmers
                $sql = "SELECT * FROM farmerregistration LIMIT 7";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['farmer_id'] . "</td>";
                        echo "<td>" . $row['farmer_name'] . "</td>";
                        echo "<td><form method='POST' action='delete_farmer.php'>";
                        echo "<input type='hidden' name='farmer_id' value='" . $row['farmer_id'] . "'>";
                        echo "<button type='submit' name='delete' class='btn delete-btn'>Delete</button>";
                        echo "</form></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No farmers available.</td></tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
