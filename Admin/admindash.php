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
</body>
</html>
