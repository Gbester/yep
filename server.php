<?php
session_start();


//clears variables
$firstName = "";
$lastName = "";
$DoB = "";
$email = "";
$school = "";
$errors = array();
$today = date("Y-m-d");

//connect to database

$db = mysqli_connect('localhost','root','','gibjohn');

//user registration
  
if (isset($_POST['reg_user'])) {
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $DoB = mysqli_real_escape_string($db, $_POST['DoB']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $school = mysqli_real_escape_string($db, $_POST['school']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  
  //form validation
  $diff = date_diff(date_create($DoB), date_create($today));

  if($diff->format('%y%') < 12){
	array_push($errors, "You must be atleast 12 to register");
}
  
  if (empty($firstName)) { array_push($errors, "First name is required"); }
  if (empty($lastName)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required");}
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { array_push($errors, "Email is not vaild");}
  if (empty($school)) { array_push($errors, "School is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required");}
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }
  
  // valdiating user from database
  $user_check_query = "SELECT * FROM students WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $student = mysqli_fetch_assoc($result);
  
  if ($student) {
    if ($student['email'] == $email) {
      array_push($errors, "Email already exists");
    }
  }
  
  //registers the user if no errors
  if (count($errors) ==0) {
    $password = md5($password_1); //encrypts
     
    $query = "INSERT INTO students(firstName,lastName,DoB,email,school,password) 
    VALUES('$firstName','$lastName','$DoB','$email','$school','$password')";
    mysqli_query($db,$query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "Account Created";
    header('location: login.php');
}
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM students WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
        $_SESSION['loggedin'] = "true";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>
  