
<?php 
    require('./header.php');
    include('../admin validation/config.php');

    $sql = mysqli_query($conn, "SELECT * FROM product ");
    $result = mysqli_fetch_assoc($sql);
    $count =mysqli_num_rows($sql); 
    
       while($row = mysqli_fetch_array($sql)) {
           
?>
<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../image/cat-1.png" alt="">
            <h3>Vegetable</h3>
            <h3><?php $id= $row['id']; ?></h3>
            <p>upto 40% off</p>
            <a href="./viewcart.php?id=".$id  class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="../image/cat-2.png" alt="">
            <h3><?php echo $row['name']; ?></h3>
            <p>upto 45% off</p>
            <a href="./products.php#fruits" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="../image/cat-4.png" alt="">
            <h3><?php echo $row['name']; ?></h3>
            <p>upto 45% off</p>
            <a href="./products.php#meat" class="btn">shop now</a>
        </div>

    </div>
<!-- <?php } ?> -->
</section>
