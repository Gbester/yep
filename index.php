<?php
include 'topNav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
<body>
<?php if (!isset($_SESSION['loggedin'])) { ?>
  <div class="container">
    <img src="images/getstarted.jpg" width= "100%" height="75%" style="box-shadow: 8px 8px 10px #212d40" alt="student">
    <a href="register.php" class="btn">Get Started</a>
    <?php } else { ?>
      <div class="boxes">
        <div class="box-Study">
          <img src="images/subjects.jpg" width="512px" height="512px" style="box-shadow: 8px 8px 10px #212d40">
          <h3 style=" color:white; text-align: center">Explore Subjects</h3>
          <a href="#subjects" class="btn">Go Now!</a>

        </div>
        <div class="box-Tutor">
        <img src="images/tutor.jpg" width="512px" height="512px" style="box-shadow: 8px 8px 10px #212d40">
        <h3 style=" color:white; text-align: center">Find a Tutor</h3>
        <a href="#tutorSurvey" class="btn">Go Now!</a>

        </div>
        <div class="box-Dash">
        <img src="images/dashboard.jfif" width="512px" height="512px" style="box-shadow: 8px 8px 10px #212d40">
        <h3 style=" color:white; text-align: center">Explore dashboard</h3>
        <a href="dashboard.php" class="btn">Go Now!</a>

        </div>
    </div>
    <?php } ?>
  </div>
</body>
</hmtl>
<?php
    include 'footer.php';
    ?>

