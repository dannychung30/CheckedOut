<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for signing up</title>
    <link rel="stylesheet" href="../css/global_style.css">
    <link rel="stylesheet" href="../css/thank_you_page.css">
</head>
<body>
<?php
    // checking user's input
    if ($_GET['create-password'] != $_GET['confirm-password']) {
        exit("<p>Your passwords did not match. Go back to the previous page</p>");
    }

    // connecting with database
    require_once("config.php");

    // required table info
    $table_name = "";
    $first_name = $_GET['first-name'];
    $last_name = $_GET['last-name'];
    $email = $_GET['email'];
    $password = $_GET['create-password'];

    // check to see if this email is already registered


    // close connection 
    $pdo = null;
?>
    <div id="main-div">
        <h1>Thank you for signing up!</h1>
        <h3><a href="login.html">Click here to login.</a></h3>
    </div>

</body>
</html>