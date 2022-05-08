<?php
include('../admin validation/config.php');
include('./admindashboard.php');

$sql = "select * from product";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);



// echo "j";
// echo $row['name'];
// echo $row['price'];
// echo $row['quantity'];
$i = 1;
?>
<style>
   
table, th, td {
  border:1px solid black;
}

</style>
    

<table  style="width:30%">
    <thead>
    <button id="btn"><a href="addpro.php">Add Category</a></button>
</thead>
<tr>
<th>SN</th>
<th>Name</th>
<th>Price</th>
<th>Image</th>
</tr>
<?php
 while($row = mysqli_fetch_array($result)) {
?>
<tr>
<!-- <td><?php echo $i; $i++; ?></td> -->
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['image']; ?></td>
</tr>

<?php
 }
 ?>


</table>