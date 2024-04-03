<?php
include('./inludes/connect.php');
// Getting products
function getproduct(){
    global $con;
    if(!isset($_GET['categories'])) {
        $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,6";
        $result_query = mysqli_query($con, $select_query);
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['description'];
            $category_id = $row['category_id'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['price'];
            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h3 class='card-title'>$product_title</h3>
                        <p class='card-text'>$description</p>
                        <h5 class='card-title'>$product_price</h5>
                        <a href='#' class='btn btn-info'>Add to Cart</a>
                        <a href='#' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
            </div>";
        }
    }
}
// Getting unique categories
function getuniquecategories(){
    global $con;
    if(isset($_GET['categories'])){
        $category_id = $_GET['categories'];
        $select_query = "SELECT * FROM `products` WHERE category_id=$category_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo"<h1 class='text-center text-danger'>No stock for this category</h1>";

        }
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['description'];
            $category_id = $row['category_id'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['price'];
            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h3 class='card-title'>$product_title</h3>
                        <p class='card-text'>$description</p>
                        <h5 class='card-title'>$product_price</h5>
                        <a href='#' class='btn btn-info'>Add to Cart</a>
                        <a href='#' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
            </div>";
        }
    }
}
//get searching product
function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value= $_GET['search_data']; 
        $search_query = "SELECT * FROM `products` WHERE product_keywords LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['description'];
            $category_id = $row['category_id'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['price'];
            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h3 class='card-title'>$product_title</h3>
                        <p class='card-text'>$description</p>
                        <h5 class='card-title'>$product_price</h5>
                        <a href='#' class='btn btn-info'>Add to Cart</a>
                        <a href='#' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
            </div>";
        }
    }
}

?>
