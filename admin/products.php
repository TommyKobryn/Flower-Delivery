<?php

session_start();
if (!isset($_SESSION ['loggedin']) || $_SESSION ['loggedin'] == false) {
  header ("Location: ../index.php");
}

?>



<?php
require_once '../core/connection.php';
include 'includes/head.php';
include 'includes/navigation.php';
//get products from database
$sql = "SELECT * FROM products";
$product = $conn -> query($sql);
// add a new product
if (isset($_POST['add_product'])){
$sql = "INSERT INTO products (title,price,list_price,image,description,target)
VALUES ('$_POST[title]','$_POST[price]','$_POST[list_price]','$_POST[image]','$_POST[description]','$_POST[target]')";
//echo "<meta http-equiv='refresh' content='0'>"; //reloads the page after adding values
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

//edit
if(isset($_GET['edit']) && !empty($_GET['edit'])){
  $edit_id = (int)$_GET['edit'];
$sql2 = "SELECT * FROM products WHERE id = '$edit_id'";
$edit_result = $conn -> query($sql2);
$eproduct = mysqli_fetch_assoc($edit_result);


}




//delete
if(isset($_GET['delete']) && !empty($_GET['delete'])) {
$delete_id = (int)$_GET['delete'];
$sql = "DELETE FROM products WHERE id='$delete_id'";
$conn -> query($sql);
header('Location: products.php');
}
$conn->close();
?>



<h2 class="text-center text-info">Add / Edit / Delete the Product</h2>
<hr />
<p style="text-align:center"> *Field is Required- in case of no input type 'none'.</p>
<br  />
<!-- add the new product form -->
<div class="newproduct">


<div class="addproduct">
<form action="products.php" method="post">
<div class="form-group">
  <label for="title" text-right> Title*</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="The Name of the Flower (will show max 25 char)" value="" required />

  <label for="price">Prcie*</label>
  <input type="number" step="0.01" name="price" id="price" placeholder="Final Price" class="form-control" value="" required/>
  <label for="list_price">Old Price*</label>
  <input type="number" step="0.01" name="list_price" id="list_price" placeholder="Original Price" class="form-control" value="" required />
  <label for="image">Image Path*</label>
  <input type="url" name="image" id="image" placeholder="URL to the Image" class="form-control" value="" required/>
  <label for="description">Description*</label>
  <textarea name="description" style = "min-height:100px" id="description" placeholder="Description of the Flower(will show max 145 char)" class="form-control" value="" required/></textarea>
  <label for="target">Target More Info*</label>
  <input type="text" name="target" id="target" placeholder="The Name of the Flower" class="form-control" value="" required />
<br />

  <input type="submit" name="add_product" value="Add a new Product" class="btn btn-md btn-success" />

</div>
</form>

</div></div>

<br /><br /><hr />



<div class="container table-outcome">
  <p>On this site as an admin you are able to add and delete all the products that are on the homepage </p>


<div class="table-responsive">
 <table class="table table-bordered table-hover ">
   <thead class="thead-inverse">
     <tr>
       <th>Edit</th>
       <th>Title</th>
       <th>Price</th>
       <th>Old </th>
       <th>image</th>
       <th>description</th>
       <th>More info Target</th>
       <th>Delete</th>
     </tr>
   </thead>
   <tbody>
     <?php while($result = mysqli_fetch_assoc($product)) : ?>
     <tr>
       <td><a href="products-edit.php?edit=<?= $result['id'] ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a> </td>
       <td><?= $result['title'] ?></td>
       <td><?= $result['price'] ?></td>
       <td><?= $result['list_price'] ?></td>
       <td class="description2"><?= $result['image'] ?></td>
       <td><?= $result['description'] ?></td>
       <td><?= $result['target'] ?></td>
       <td><a href="products.php?delete=<?= $result['id'] ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a> </td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</div>

</div>


<?php include 'includes/footer.php'
?>
