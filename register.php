<?php include('server.php');
include 'topNav.php';?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/register.css">
</head>
<html>
  <body>
    <div class="header">
      <h2>Register</h2>
    </div>
    <div class="mx-auto">
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="firstName" Value="<?php echo $firstName;?>">
        </div>
        <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="lastName" Value="<?php echo $lastName;?>">
        </div>
        <div class="input-group">
        <label>Date of Birth</label>
        <input type="date" name="DoB" Value="<?php echo $DoB;?>">
        </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email;?>">
      </div>
      <div class="input-group">
      <label>School</label>
        <input type="text" name="school" Value="<?php echo $school;?>">
        </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
      </div>
      <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
     </form>
    </div>
  </body>
  <?php
    include 'footer.php';
    ?>
  </html>
      