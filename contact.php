<?php
  require_once 'core/connection.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/header-full.php';

  $sql = "SELECT * FROM products";
  $products = $conn->query($sql);

?>

<div class="container contact">
  <div class="contact">


    <h2>Request a call back / Email</h2>
    	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Have some questions?</strong> No worries, fill in the form and one of our agents will call you back within the next hour.
    		<br>Call back service avaliable 7 days a week from 9 am till 6 pm.
    </div>
    <!-- Building forms in groups for better display -->
    	<form>
    		  <div class="form-group">
      <label for="InputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Please enter your name">
      </div>
    <!-- Applying classes to forms in order to get appropriate results once user cklicks on the submit button -->
      <div class="form-group">
        <label for="exampleInputEmail1">Email address </label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please enter your Email" >
      </div>
       <div class="form-group">
      <label for="Inputphone">Phone number</label>
        <input type="number" class="form-control" id="exampleInputName2" placeholder="Your phone number">
    		</div>

     	<div class="form-group form-inline">
      <label for="InputTime">Convinient time to call you back:</label>
      <input id="InputTime" class="form-control" type="datetime-local" style="max-width:300px"value="2011-01-13"/>
    			</div>
    <!-- Creating radio for choosing the type of contact -->
      <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
       Please call me back in the time I have selected
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        I have a general query, therfore please just email me back
      </label>
    </div>
      <button type="submit" class="btn btn-md btn-danger">Request the Email/Call back</button>
    </form>


</div>
</div>


<?php
include 'includes/modal-details.php';
  include 'includes/footer.php';
?>
