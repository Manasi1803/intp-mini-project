<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>


    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form class="login-form" action="login.php" method="post">
        <?php include('errors.php'); ?>
        <h2>Login</h2>
        <input type="text" name="email" value="" placeholder="Email" required>
        <input type="password" name="password" value="" placeholder="Password" required>
        <button type="submit" name="login_user" value="login">Login </button>
        <p class="options">Not Registered? <a href="register.php">Create an Account</a></p>
      </form>
      <!--login form end-->
    </div>
    <!--form area end-->

  </body>
</html>
