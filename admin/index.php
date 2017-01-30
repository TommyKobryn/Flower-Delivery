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

?>



<div class="container">
<div class="welcome-admin-index">

<center>
<h1 class="text-info"> Welcome to the Admin Dashboard </h1>
</center>
</div>
</div>

<div class="container">

<div class="content-admin-index">



</div>
</div>

 <?php include 'includes/footer.php'
 ?>
