<?php 

include "loginsystem/partials/dbconnect.php";

  $con = mysqli_connect($servername,$username,$password,$database);
  if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM accounts WHERE username='$username'";
  	$results = mysqli_query($con, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM accounts WHERE email='$email'";
  	$results = mysqli_query($con, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['save'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
    $pack=$_POST['pack'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
  	$sql = "SELECT * FROM accounts WHERE username='$username'";
  	$results = mysqli_query($con, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  	  $query = "INSERT INTO `requests` (`firstname`, `lastname`, `username`, `password`, `pack`, `date`,`email`, `phone`, `address`) VALUES ('$firstname', '$lastname', '$username', '$password', '$pack', current_timestamp(), '$email', '$phone', '$address');";
  	  $r = mysqli_query($con, $query);
  	  echo 'Saved!';
        if($r){
            echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
        }else{
            echo "<script>alert('Unknown error occured.')</script>";
        }
  	  exit();
  	}
  }

?>
<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<form id="register_form">
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Signup</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="mb-3">
    <label for="exampleInputname" class="form-label">FirstName</label>
    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputlast" class="form-label">LastName</label>
    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 error_msg">
    <label for="exampleInputEmail1" class="form-label" style="color:#968a8c;">UserName</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
    <span></span>
    
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="form-group">
  <label for="exampleInputPack" class="form-label">Select one Pack</label>
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
  
                            <div class="mb-3">
    <label for="exampleInputPack" class="form-label">Conform Pack Selected</label>
    <input type="text" name="pack" class="form-control" id="pack">
  </div>
  

    <div class="mb-3 error_msg">
    <label for="exampleInputemail" class="form-label " style="color:#968a8c;">Email</label>
    <input type="email" name="email" class="form-control" id="email">
    <span></span>
  </div>

  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control" id="phone">
  </div>

  <div class="mb-3">
  <label for="exampleInputPhone" class="form-label">Address</label>
  <textarea class="form-control" name="address" id="address" style="height: 100px"></textarea>
  
</div>
<div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with EBase's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
  <div class="text-center">
  
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="button" name="signup" class="btn btn-primary col-3 my-3" id="reg_btn">SignUp</button>
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="script.js"></script>
