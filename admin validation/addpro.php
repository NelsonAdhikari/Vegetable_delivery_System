<?php
include('./config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];




    $sql = "insert into product(id,name,price,image) values('','$name', '$price','$image')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "added successfully";
       
    }

}
?>
<style>
table {
    margin: 8px;
}

th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    background: #666;
    color: #FFF;
    padding: 2px 6px;
    border-collapse: separate;
    border: 1px solid #000;
}

td {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    border: 1px solid #DDD;
}

    </style>

<form action="addpro.php" method="post">
<div>
Name:
<input type="text" name="name">
</div>

<div>
Price:
<input type="text" name="price">
</div>

<div>
Image:
<input type="text" name="image">
</div>

<input type="submit" value="submit" name="submit">
</form>