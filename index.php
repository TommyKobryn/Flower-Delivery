<?php
  require_once 'core/connection.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/header-full.php';

  $sql = "SELECT * FROM products";
  $products = $conn->query($sql);

?>


<div class="container">
<div class="welcome-wiriting col-sm-12">
  <h1 id="welcome">Welcome to BeSmart Flowers </h1><blockquote>
  <i class="fa fa-pagelines fa-2x" aria-hidden="true" style="color:#84001e"></i> Smart Flower Delivery Service </blockquote>
  </div>
  </div>

  <div class="container">

  	<div class="delivery-content">
  		<div class="delivery col-sm-4">
  		<p class="shaky"><i class="fa fa-truck fa-2x" aria-hidden="true" ></i><strong> Always next day delivery</strong> before 7:00pm</p>

  		</div>
  		<div class="guarantee col-sm-4">
  		<p class="shaky"><i class="fa fa-check-circle fa-2x" aria-hidden="true"></i><strong> Guaranteed freshness</strong> up to <strong>10 days!</strong></p>

  		</div>
  		<div class="transport col-sm-4">
  		<p class="shaky"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i><strong> Our delivery</strong> is avaliable <strong>7 days </strong>a week!</p>
	   </div>
	  </div>
	</div>


<div class="container flowers">
  <div class="flowers-list">
      <?php while($product = mysqli_fetch_assoc($products)) : ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img data-toggle="tooltip" data-placement="top" title="For more detials please call us" src="<?= $product['image']; ?>" alt="...">
        <div class="caption">
          <h3><?= $product['title']; ?></h3> <p class="list-price" text-danger>Normal Price: <s> £<?= $product['list_price']; ?> </s> <b>Our price: £<?= $product['price']; ?></b></p>
          <p><?= $product['description']; ?></p>
          <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Buy Now</a>
            <button id="tom"  type="button" class="btn btn-info" data-toggle="modal" data-target="#<?= $product['target']; ?>" ><i class="fa fa-info-circle" ></i> Read More</button></p>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
      </div>
    </div>



<?php
include 'includes/modal-details.php';
  include 'includes/footer.php';
?>
