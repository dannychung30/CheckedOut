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
    $table_name = "customers";
    $first_name = $_GET['first-name'];
    $last_name = $_GET['last-name'];
    $email = $_GET['email'];
    $password = $_GET['create-password'];

    // check to see if this email is already registered
    $sql = "SELECT * FROM $table_name";
    $result = $pdo -> query($sql);
    while ($row = $result -> fetch()) {
        if ($row['email'] == $email) {
            exit("<p>The email you entered is already registered.</p><p>Click <a href='../html/login.html'>here</a> to login");
        }
    }

    // insert new user's data into customers table
    $sql = "INSERT INTO $table_name(email, first_name, last_name, password) VALUES('$email','$first_name','$last_name','$password')";
    $pdo -> exec($sql);

    // retrieving the customer's email to use in next page
    $sql = "SELECT * FROM $table_name WHERE email = '$email'";
    $result = $pdo -> query($sql);
    if ($row = $result -> fetch()) {
        $email = $row['email'];
    }

    // close connection 
    $pdo = null;
?>
    <div id="main-div">
        <h1>Thank you for signing up!</h1>
        <h3><a href="../html/login.html">Click here to login.</a></h3>
    </div>

</body>
</html>