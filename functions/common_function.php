<?php
include('../inludes/connect.php');
// getting products
function getproducts(){
    global $con;
    $select_query="Select * from `products` order by rand() limit 0,6";
    $select_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($select_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $description=$row['description'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        $product_image1=$row['product_image1'];
        $product_price=$row['price'];
        echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                    <h3 class='card-title'>$product_title</h5>
                    <p class='card-text'>$description</p>
                    <h5 class='card-title'>$product_price</h5>
                    <a href='#' class='btn btn-info'>Add to Cart</a>
                    <a href='#' class='btn btn-secondary'>view more</a>
                </div>
            </div>
        </div>";
    }
}
function getbrand(){
    global $con;
    $select_brand="Select * from `brand`";
    $result_brand=mysqli_query($con, $select_brand);
    while($row_brand=mysqli_fetch_assoc($result_brand)){
      $brand_title=$row_brand['brand_title'];
      $brand_id=$row_brand['brand_id']; 
      echo"<li class='nav-item'>
      <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
      </li>";
    }
}
?>
