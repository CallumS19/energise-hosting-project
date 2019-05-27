<?php
session_start();


// initializing variables
$username = "";
$email = "";
$errors = array();


// connect to the database
$db = mysqli_connect('localhost', 'lckyprojects', '', 'EH');


// Register User
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $psw = mysqli_real_escape_string($db, $_POST['psw']);
    $psw2 = mysqli_real_escape_string($db, $_POST['psw2']);
    
    //form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) correspoding error unto $errors array
    
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($psw)) { array_push($errors, "Password is required"); }
    if ($psw != $psw2) {
        array_push($errors, "The two passwords do not match");
    }
}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($psw);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$psw')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.php');
  }
