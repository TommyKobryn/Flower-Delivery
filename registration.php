<?php

require_once 'core/connection.php';
include 'includes/head.php';


// add a new user
if (isset($_POST['registerr'])){
$sql = "INSERT INTO users (full_name,username,password,email)
VALUES ('$_POST[full_name]','$_POST[username]','$_POST[password]','$_POST[email]')";
//echo "<meta http-equiv='refresh' content='0'>"; //reloads the page after adding values
if ($conn->query($sql) === TRUE) {
    echo "You have been registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header( "refresh:3;url=index.php" );
}

?>






<body ng-app>

<div class="registrationform">
<h2 class="text-center"> Registration </h2>
<form method="post" action="registration.php" name="frm" >


  <div class="form-group">
<label id = "name1" for="full_name">Full Name: </label>
<input type="text" name ="full_name" id="full_name" class="form-control" ng-model="user.full_name" required >
<span ng-show="frm.full_name.$dirty && frm.full_name.$error.required" >Required!</span>

</div>
  <div class="form-group">
<label for="email">Username: </label>
<input type="text" name ="username" id="username" class="form-control" ng-model="user.username" required >
<span ng-show="frm.username.$dirty && frm.username.$error.required" >Required!</span>
</div>

<div class="form-group">
<label for="password">Password: </label>
<input type="password" name ="password" id="password" class="form-control" ng-model="user.password" ng-minlength="7"  required>
<span ng-show="frm.password.$dirty && frm.password.$error.required"> Required!</span>
<span ng-show="frm.password.$dirty && frm.password.$error.minlength" > Please enter minimum 7 charactes</span>
</div>
<div class="form-group">
<label for="email">Email: </label>
<input type="email" name ="email" id="email" class="form-control" ng-model="user.email" required>
<span ng-show="frm.email.$dirty && frm.email.$error.required" >Required!</span>
<span ng-show="frm.email.$dirty && frm.email.$error.email" >Please enter correct email!</span>
</div>

<div class="form-group inline-bloc">
  <input type="submit" ng-disabled="frm.$invalid" name ="registerr" value="Register" class="btn btn-primary"/>
</div>
</form>
<p class="text-right">
  <a href="/Flower_delivery_php/index.php">Go back to Homepage</a>
</p>


</div> </div>
</body>




<?php
include 'includes/modal-details.php';
  include 'includes/footer.php';
?>
