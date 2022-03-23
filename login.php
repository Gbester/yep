<?php include('server.php');
include 'topNav.php'; ?>
<!DOCTYPE html>
<head><link rel="stylesheet" type="text/css" href="CSS/register.css"></head>
<html>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
</body>
<?php
    include 'footer.php';
    ?>
	    <?php
    include 'footer.php';
    ?>
</html>