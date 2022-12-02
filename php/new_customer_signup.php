<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer Signup</title>
    <link rel="stylesheet" href="../css/new_customer_signup.css">
    <link rel="stylesheet" href="../css/global_style.css">
</head>
<body>
    <div id="header"></div>
    <h1>New Customer Signup</h1><br/>
    <div id="form">
        <form id="sign-up" action="thank_you_page.php" method="GET">
            <h2>Sign up for a free account</h2><br/><br/>
            <input type="text" id="first-name" placeholder="First Name" name="first-name" required>
            <input type="text" id="last-name" placeholder="Last Name" name="last-name" required><br/><br/>
            <input type="email" id="email" placeholder="Email Address" name="email" required><br/><br/>
            <input type="password" id="create-password" placeholder="Password" name="create-password" required><br/><br/>
            <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirm-password" required><br/><br/>
            <button id="create-account">Create Account</button>
        </form>
        <p><a href="../html/login.html">Already have an account?</a></p>
        <p><a href="../html/Homepage.html">&#8592; Back to home</a></p>
    </div>

</body>
</html>