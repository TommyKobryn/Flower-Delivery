<?php

session_start();
if (!isset($_SESSION ['loggedin1']) || $_SESSION ['loggedin1'] == false) {
  header ("Location: index.php");
}


?>


<?php
require_once 'core/connection.php';
include 'includes/head.php';


$current_user = $_SESSION['username'];
$user_detail = "SELECT * FROM users WHERE username= '$current_user'";
$result = $conn -> query($user_detail);
$final_result = mysqli_fetch_assoc($result);


?>

<div class="container">


<div class="title">


<h2>Weclome to your User Dashboard  <span id="username-session"><?= $_SESSION['username'] ?></span></h2>
</div></div>

<div class="container" style="margin-bottom:30px;">
<div class="user-info">

  <div class="table-responsive" >
    <table class="table" style=" border-width:3px; border-style:solid;margin-top:15px; ">
      <thead>
        <tr>
          <th>Member's Username: <span id="usernamesession1"><?= $final_result['username'] ?></span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>User ID : <span id="usernamesession1"><?= $final_result['id'] ?></span></td>
        </tr>
        <tr>
          <td>User's Full Name : <span id="usernamesession1"><?= $final_result['full_name'] ?></span></td>
        </tr>
        <tr>
          <td>User's Password : <span id="usernamesession1">Hidden</span></td>
        </tr>
        <tr>
          <td>Registration Time and Date : <span id="usernamesession1"><?= $final_result['join_date'] ?></span></td>
        </tr>

      </tbody>
    </table>
    <form action ="admin/logout.php">
      <button class="btn btn-danger btn-md" type="logout"  > Log out </button>
    </form>
    </div>
  </div>







</div>


 <?php include 'includes/footer.php'
 ?>
