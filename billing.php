<?php

include 'config.php';


if (isset($_REQUEST["submit"])){

    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $amount= $_REQUEST["amount"];


    $ins = "INSERT into billing(id,name,date,amount) VALUES('$id','$name','$date','$amount')";
    $query1 = mysqli_query($connection,$ins);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!--nav bar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"><img src="img\logo.jpg" width ="80" height="90"alt="Gym-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Member.php">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>
<!--nav bar end-->



<!-- Form start-->
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Member ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Member Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="NAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Billing Date</label>
    <input type="text" name="date" class="form-control" id="inputAddress" placeholder="date">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Amount</label>
    <input type="text" name ="amount" class="form-control" id="inputAddress2" placeholder="Amount">
  </div>
    <button type="submit" name ="submit" class="btn btn-primary">Save</button>
    <button type="submit" name ="submit"class="btn"><a href="billdetails.php">Details</a></button>
</form>
<!-- Form end-->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>