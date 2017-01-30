<?php
  require_once 'core/connection.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/header-full.php';

  $sql = "SELECT * FROM products";
  $products = $conn->query($sql);

?>

<div class="container aboutus">
  <div class="aboutus">

<h1> Welcome to About us page </h1>
<p>
  On our site you can order flowers and they will be delivered to your door.
  On our site you can order flowers and they will be delivered to your door.On our site you can order flowers and they will be delivered to your door.
  On our site you can order flowers and they will be delivered to your door. On our site you can order flowers and they will be delivered to your door.
   On our site you can order flowers and they will be delivered to your door.On our site you can order flowers and they will be delivered to your door.
   On our site you can order flowers and they will be delivered to your door.
</p>
<p>
  On our site you can order flowers and they will be delivered to your door.
  On our site you can order flowers and they will be delivered to your door.On our site you can order flowers and they will be delivered to your door.
  On our site you can order flowers and they will be delivered to your door. On our site you can order flowers and they will be delivered to your door.
   On our site you can order flowers and they will be delivered to your door.On our site you can order flowers and they will be delivered to your door.
   On our site you can order flowers and they will be delivered to your door.
</p>
<p>
  On our site you can order flowers and they will be delivered to your door.
  On our site you can order flowers and they will be delivered to your door.On our site you can order flowers and they will be delivered to your door.
  On our site you can order flowers and they will be delivered to your door. On our site you can order flowers and they will be delivered to your door.
   On our site you can order flowers and they will be delivered to your door.On our site you can order flowers and they will be delivered to your door.
   On our site you can order flowers and they will be delivered to your door.
</p>

  </div>
</div>


<?php
include 'includes/modal-details.php';
  include 'includes/footer.php';
?>
