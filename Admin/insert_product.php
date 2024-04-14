<?php
session_start();
include("../Includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inserting Product</title>
    <style>
        body {
            position: relative;
            text-align: center;
            background-size: 30px;
            margin: 5px;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
        }

        form {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"],
        select,
        textarea {
            width: 300px;
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin: 5px;
        }

        #insnow {
            width: 150px;
            height: 40px;
            background-color: lawngreen;
            border: none;
            cursor: pointer;
        }

        #insnow:hover {
            background-color: limegreen;
        }

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
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <h2>Insert New Product Here</h2>
        <label for="product_title">Product Title:</label>
        <input type="text" name="product_title" id="product_title" required>

        <label for="product_cat">Product Categories:</label>
        <select name="product_cat" id="product_cat" required>
            <option value="">Select a Category</option>
            <?php
            $get_cats = "SELECT * FROM categories";
            $run_cats =  mysqli_query($con, $get_cats);

            while ($row_cats = mysqli_fetch_array($run_cats)) {
                $cat_id = $row_cats['cat_id'];
                $cat_title = $row_cats['cat_title'];
                echo "<option value='$cat_id'>$cat_title</option>";
            }
            ?>
        </select>
        <label for="product_image">Product Image:</label>
        <input type="file" name="product_image" id="product_image">
        <label for="product_stock">Product Stock (In kg):</label>
        <input type="text" name="product_stock" id="product_stock" required>
        <label for="product_price">Product Price (Per kg):</label>
        <input type="text" name="product_price" id="product_price" required>
        <label for="product_desc">Product Description:</label>
        <textarea name="product_desc" id="product_desc" cols="40" rows="8"></textarea>
        <label for="product_keywords">Product Keywords:</label>
        <input type="text" name="product_keywords" id="product_keywords" size="60">
        <input type="submit" id="insnow" name="insert_post" value="Insert Product Now">
        <button class="btn"><a href="admin_dashboard.php">Back</a></button>
    </form>
</body>
</html>
<?php
if (isset($_POST['insert_post'])) {
    // getting the text data from fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];
    // Escape special characters in product description
    $product_desc = mysqli_real_escape_string($con, $_POST['product_desc']);
    $product_keywords = $_POST['product_keywords'];

    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp, "product_images/$product_image");

    // Inserting data into the products table
    $insert_product = "INSERT INTO products (product_cat, product_title, product_stock, product_price, product_desc, product_image, product_keywords) 
                        VALUES ('$product_cat', '$product_title', '$product_stock', '$product_price', '$product_desc', '$product_image', '$product_keywords')";

    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {
        echo "<script>alert('Product has been added')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
    } else {
        echo "<script>alert('Error Uploading Data Please Check your Connections')</script>";
    }
}
?>
