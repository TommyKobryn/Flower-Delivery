<?php
require_once '../core/connection.php';
include 'includes/head.php';
include 'includes/navigation.php';

if(isset($_GET['edit']) && !empty($_GET['edit'])){
  $edit_id = (int)$_GET['edit'];
$sql2 = "SELECT * FROM products WHERE id = '$edit_id'";
$edit_result = $conn -> query($sql2);
$eproduct = mysqli_fetch_assoc($edit_result);

}

if (isset($_POST['submit'])){
$id = $eproduct['id'];
$sql = "UPDATE products SET title = '$_POST[newtitle]' , price = '$_POST[newprice]' , list_price = '$_POST[newlist_price]' , image = '$_POST[newimage]', description = '$_POST[newdescription]', target = '$_POST[newtarget]' WHERE id = '$_POST[id]'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: products.php');
}

?>

<div class="change-entry" >

<form method="post" action="products-edit.php">
  <label></label>
<input type="hidden" name="id" value="<?php echo $eproduct['id']  ?>" />
<br />
<label>Title</label>
  <input type="text" name="newtitle" value="<?php echo $eproduct['title']  ?>" />
<br />
<label>Price</label>
  <input type="number" name="newprice" value="<?php echo $eproduct['price']  ?>" />
<br />
<label>Old Price</label>
<input type="number" name="newlist_price" value="<?php echo $eproduct['list_price']  ?>" />
<br />
<label>Image</label>
<input type="url" name="newimage" value="<?php echo $eproduct['image']  ?>" />
<br />
<label>Description</label>
<input type="text" name="newdescription" value="<?php echo $eproduct['description']  ?>" />
<br />
<label>Target</label>
<input type="text" name="newtarget" value="<?php echo $eproduct['target']  ?>" />
<br />
<input type="submit" name="submit" value="Change the entry">
</form>

</div>


<?php include 'includes/footer.php'
?>
