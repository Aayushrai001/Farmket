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

    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <div class="sidebar">
        <ul>
            <li onclick="loadContent('insert_category.php')">Insert Category</li>
            <li onclick="loadContent('delete_farmer.php')">Delete Farmer</li>
            <li onclick="loadContent('delete_product.php')">Delete Product</li>
            <li onclick="logout()">Log Out</li>
        </ul>
    </div>
    <div class="container" id="content-container">
        <!-- Content goes here -->
    </div>

    <script>
        function loadContent(url) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('content-container').innerHTML = data;
                })
                .catch(error => console.error(error));
        }
        function logout() {
            window.location.href = '../Includes/logout.php';
        }

    </script>
</body>
</html>
