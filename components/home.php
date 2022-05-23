
<?php 
//  include_once('header.php');
//  session_start();

// if ($_SESSION['user_type']=="user") {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: ./login.php');
// }
$id = (isset($_POST['id']) ? $_POST['id'] : '');
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ./login.php");
}
       
    ?>

    
    <!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products for you</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="#" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->
<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../image/feature-img-1.png" alt="">
            <h3>fresh and organic</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="./categories.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="../image/feature-img-3.png" alt="">
            <h3>cash on Delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="./categories.php" class="btn">read more</a>
        </div>
        </section>
        
        <section class="features" id="features">

<h1 class="heading"> Our <span>Products</span> </h1>

    </div>
    <div class="box-container">
    <div class="box">
            <img src="../image/cat-1.png" alt="">
            <h3>Vegetable</h3>
            <!-- <h3><?php $id= $row['id']; ?></h3> -->
            <p>upto 40% off</p>
            <a href="./viewcart.php?id=".$id  class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="../image/cat-2.png" alt="">
            <h3>Fruits</h3>
            <!-- <h3><?php echo $row['name']; ?></h3> -->
            <p>upto 45% off</p>
            <a href="./viewcart.php?" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="../image/cat-4.png" alt="">
            <h3>Meat</h3>
            <!-- <h3><?php echo $row['name']; ?></h3> -->
            <p>upto 45% off</p>
            <a href="./products.php#meat" class="btn">shop now</a>
        </div>
        </section>



<?php
   include_once('./categories.php');
    ?>

<?php
    include_once('./footer.php'); ?>    

<!-- features section ends -->


<!-- </body> -->
<?php
    echo '<script type="text/javascript" src="./js/script.js">'
?>
<!-- </html> -->