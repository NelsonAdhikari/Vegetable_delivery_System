
<?php include("header.php"); 
session_start();


if (isset($_POST['Add_To_Cart'])){
    $_SESSION['cart'][] = array(
        'id' => rand(100, 10000),
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        // 'quan' => $_POST['quan'],
        'img' => $_POST['img']
    );
}
?>

    <!-- <?php print_r($_SESSION['cart']) ?> -->
   <div class="product-page">
  <!-- products section starts  -->
<br> <br>
<html>
<head>
<link rel="stylesheet" href="../css/product.css"/>
</head>
<body>
  <h1 class="heading"> Our <span>products</span> </h1>
<section class="products" id="products">
    <div class="product_grid">

        <div class="product-container1">

               
                <div id="vege">

                <div class="wrapper_box" >
                    <img src="../image/product-4.png" alt="">
                    <h3>fresh cabbage</h3>
                    <div class="price"> Rs.50 </div>
                    <a href="./viewcart.php" method="POST" name="Add_To_Cart"class="btn">add to cart</a>
                    <input type="hidden" name="Item_Name" values="fresh cabbage">
                    <input type="hidden" name="Price" values="50">
                </div>

                <div class="wrapper_box" id="vege">
                    <img src="../image/product-5.png" alt="">
                    <h3>fresh potato</h3>
                    <div class="price"> Rs.180 </div>
                    
                    <a href="./viewcart.php" method="POST" name="Add_To_Cart" class="btn">add to cart</a>
                    <input type="hidden" name="Item_Name" values="fresh potato">
                    <input type="hidden" name="Price" values="180">
                </div>

                <div class="wrapper_box">
                    <img src="../image/product-7.png" alt="">
                    <h3>fresh carrot</h3>
                    <div class="price"> RS.40 </div>
                
                    <a href="./viewcart.php" method="POST" name="Add_To_Cart" class="btn">add to cart</a>
                    <input type="hidden" name="Item_Name" values="fresh carrot">
                    <input type="hidden" name="Price" values="40">
                </div>

                <div class="wrapper_box">
                    <img src="../image/product-8.png" alt="">
                    <h3>green lemon</h3>
                    <div class="price"> Rs.200 </div>
                    
                    <a href="./viewcart.php" method="POST" name="Add_To_Cart" class="btn">add to cart</a>
                    <input type="hidden" name="Item_Name" values="green lemon">
                    <input type="hidden" name="Price" values="200">
                    </div>
                </div>
                <!-- <div id="fruits">
                <div class="product-container2">

                <div class="wrapper_box" id="fruits">
                    <img src="../image/product-1.png" alt="">
                    <h3>fresh orange</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    
                    <a href="./viewcart.php" class="btn">add to cart</a>
                </div> -->
        </div>
    </div>
</section>
</div>

<!-- products section ends -->
</body>
</html>