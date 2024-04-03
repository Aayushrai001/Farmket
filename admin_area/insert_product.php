<?php
include('../inludes/connect.php');
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['Product_Title'];
    $description = $_POST['Description'];
    $product_keywords = $_POST['Keywords'];
    $product_category = $_POST['Product_Categories'];
    $product_price = $_POST['Product_Price'];

    // Accessing images
    $product_image1 = $_FILES['Product_Image1']['name'];
    $product_image2 = $_FILES['Product_Image2']['name'];

    // Accessing images tmp name
    $temp_product_image1 = $_FILES['Product_Image1']['tmp_name'];
    $temp_product_image2 = $_FILES['Product_Image2']['tmp_name'];

    // Checking empty condition
    if (empty($product_title) || empty($description) || empty($product_keywords) || empty($product_category) || empty($product_price) || empty($product_image1) || empty($product_image2)) {
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_product_image1, "./product_image/$product_image1");
        move_uploaded_file($temp_product_image2, "./product_image/$product_image2");

        //insert query
        $insert_product = "INSERT INTO `products` (product_title, description, product_keywords, category_id, product_image1, product_image2, price) 
                           VALUES ('$product_title', '$description', '$product_keywords', '$product_category',  '$product_image1', '$product_image2', '$product_price')";
        $result_query = mysqli_query($con, $insert_product);
        if ($result_query) {
            echo "<script>alert('Successfully insert the product')</script>";
        } else {
            echo "<script>alert('Error inserting product: " . mysqli_error($con) . "')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet" href="../index.css">

    <!--font link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
<div class="container mt-3">
<h1 class="text-center">Insert Products</h1>
<!-- form -->
<form action="" method="post" enctype="multipart/form-data">
    <!--Product Title-->
    <div class="form-outline mb-4 w-50 m-auto ">
        <label for="Product_Title" class="form-label">Product Title</label>
        <input type="text" name="Product_Title" id="Product_Title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
    </div>
    <!--Description-->
    <div class="form-outline mb-4 w-50 m-auto ">
        <label for="Description" class="form-label">Description</label>
        <input type="text" name="Description" id="Description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
    </div>
    <!--Keywords-->
    <div class="form-outline mb-4 w-50 m-auto ">
        <label for="Keywords" class="form-label">Product Keywords</label>
        <input type="text" name="Keywords" id="Keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
    </div>
    <!--Category-->
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="Product_Categories" id="Product_Categories" class="form-select">
            <option value="">Select a category</option>
            <?php
            $select_query = "SELECT * FROM categories"; 
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $category_title = $row['category_title'];
                $category_id = $row['category_id'];
                echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
        </select>
    </div>
    <!--Image1-->
    <div class="form-outline mb-4 w-50 m-auto ">
        <label for="Product_Image1" class="form-label">Product Image1</label>
        <input type="file" name="Product_Image1" id="Product_Image1" class="form-control" placeholder="Enter product image" required="required">
    </div>
    <!--Image2-->
    <div class="form-outline mb-4 w-50 m-auto ">
        <label for="Product_Image2" class="form-label">Product Image2</label>
        <input type="file" name="Product_Image2" id="Product_Image2" class="form-control" placeholder="Enter product image" required="required">
    </div>
    <!--Price-->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="Product_Price" class="form-label">Product Price</label>
        <input type="text" name="Product_Price" id="Product_Price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
    </div>
    <!--Submit Button-->
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
    </div>
    <!--Home Button-->
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="button" onclick="redirectToHomePage()" class="btn btn-info mb-3 px-3" value="Home Page">
    </div>
</form>
</div>
<script>
    function redirectToHomePage() {
        window.location.href = "index.php";
    }
</script>
</body>
</html>