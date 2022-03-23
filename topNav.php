<?php 
if(!isset($_SESSION)) { 
    session_start(); 
  } 
if (isset($_GET['logout'])) {
  	session_destroy();
      unset($_SESSION['email']);
  	header("location: index.php");
}
?>
<!DOCTYPE hmtl>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>GibJohn Tutoring</title>
<!--logo was made by Freelogo Design -->
<link rel="icon" type="image/x-icon" href="/images/gibjohn.png">
<link rel="stylesheet" href="CSS/topNav.css">
</head>
</head>
<div class="topNav">
    <a href="index.php" class="logo"><img src="images/gibjohn.png"></a>
<div class="topNav-mid">
    <a href="#resources" class="active">Resources</a>
    <a href="#findatutor" class="active">Find a Tutor</a>
    <!-- This only lets logged in users go to the study page -->
    <?php if (!isset($_SESSION['loggedin'])) { ?>
        <a href="mustRegister.php" class="active">study</a>
    <?php } else { ?>
        <a href="dashboard.php" class= "active">Study</a>
    <?php } ?>
    </div>
    <!-- This shows login / register while the user is not logged in and hides it when logged in and gives the option of logging out instead -->
    <?php if (!isset($_SESSION['loggedin'])) { ?>
      <div class="topnav-right">
        <a class="active" href="login.php">Log In</a>
        <a class="active" href="register.php">Register</a>
      </div>
    <?php } else {?>
        <div class="topnav-right">
        <a class="active" href="index.php?logout='1'">Log out</a>
    </div>
        <?php }?>
    </div>
  