<?php

session_start();
if (isset($_SESSION ['loggedin']) && $_SESSION ['loggedin'] == true) {
  header ("Location: index.php");
}
session_start();
if (isset($_SESSION ['loggedin1']) && $_SESSION ['loggedin1'] == true) {
  header ("Location: ../user-dashboard.php");
}


?>


<?php
require_once '../core/connection.php';
include 'includes/head.php';


$username = $_POST['username'];
$password = $_POST['password'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$_SESSION['username'] = $username;

$result = $conn -> query( "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND permissions = 'admin' ");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['loginn'])){
  if ($row ['username'] == $username && $row['password'] == $password){
    $_SESSION['loggedin'] = true;
    header ("Location: index.php");}
    else {
      echo "Please enter correct login details";

  }}


  $result = $conn -> query( "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND permissions = 'user' ");
  $row1 = mysqli_fetch_assoc($result);

  if(isset($_POST['loginn'])){
    if ($row1 ['username'] == $username && $row1['password'] == $password){
      $_SESSION['loggedin1'] = true;
      header ("Location: ../user-dashboard.php");}
  }


?>


<div class="backgroud-login">



<div class="loginform">

<h2 class="text-center"> Login </h2>
<form method="post" action="login.php" >
  <div class="form-group">
<label for="email">Username: </label>
<input type="text" name ="username" id="username" class="form-control" >
</div>
<div class="form-group">
<label for="password">Password: </label>
<input type="password" name ="password" id="password" class="form-control" >
</div>
<div class="form-group">
  <input type="submit" name ="loginn" value="Login" class="btn btn-primary"/>
</div>
</form>
<p class="text-right">
  <a href="/Flower_delivery_php/index.php">Go back to Homepage</a>
</p>

</div>
</div>




<?php include 'includes/footer.php'
?>
