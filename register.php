<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>


    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form class="login-form" action="register.php" method="post">
        <?php include('errors.php'); ?>
        <h2>Sign Up</h2>
        <input type="text" name="name" value="" placeholder="Name" required>
        <input type="email" name="email" value="" placeholder="Email" required>
        <input type="password" minlength="12" name="password" value="" placeholder="Password" required>
        <input type="tel" maxlength="10" pattern="[0-9]{10}" value="" placeholder="Mobile Number" name="mobilenumber" required>
        <textarea type="text" name="address" value="" placeholder="Address" rows="4" cols="75" required></textarea>
        <input type="tel" maxlength="6" name="pincode" value="" placeholder="Pin Code" required>
        
        <button type="submit" class="btn" name="reg_user">Register</button>
        <p class="options">Registered? <a href="login.php">Login</a></p>
      </form>
      <!--login form end-->
    </div>
    <!--form area end-->

  </body>
</html>
