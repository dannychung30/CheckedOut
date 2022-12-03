<?php
session_start();

// sesssion variables
$email = $_SESSION['email'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/global_style.css">
</head>

<body>

  <div id="main-div">
    <h1>Login</h1>
    <div id="secondary-div">
      <form action="Menu.php">
        <input type="email" id="email-address-login" name="email" placeholder="Email Address" required><br /><br />
        <input type="password" id="password-login" name="password" placeholder="Password" required><br /><br />
        <button id="login-button">Log in</button>
      </form>
      <p>Forgot your password?</p>
      <p><a href="../php/new_customer_signup.php">Create an account</a></p>
      <p><a href="../html/Homepage.html">&#8592; Back to home</a></p>
    </div>
  </div>

</body>

</html>
