<?php
session_start();

// initializing variables
$name = "";
$email = "";
$mobilenumber = "";
$address = "";
$pincode = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'logistics');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($mobilenumber)) { array_push($errors, "Mobile Number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($pincode)) { array_push($errors, "Pin Code is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE name='$name' OR email='$email' OR mobilenumber='$mobilenumber' OR address='$address' OR pincode='$pincode' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email, password, mobilenumber, address, pincode) 
  			  VALUES('$username', '$email', '$password', '$mobilenumber', '$address', '$pincode')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.html');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}

?>
