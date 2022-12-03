<?php
session_start();

require_once('config.php');

if (isset($_GET['email']) && isset($_GET['password'])) {
    // putting user inputs into variables
    $email = $_GET['email'];
    $password = $_GET['password'];
}

// checking to see if user information is in our database 
$sql = "SELECT * FROM customers
        WHERE email = '$email' AND password = '$password'";
$result = $pdo -> query($sql);
if (!$row = $result -> fetch()) {
    exit("<p>Account does not exist</p><br/>
        <p>Click <a href='new_customer_signup.php'>here</a> to create an account</p>");
}
else {
    $email = $row['email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
}

// close connection 
$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="../css/HeaderButtons.css">
  </head>
  <body>
    <header id = "headerbuttons">
		 <table>
			<tr id = "navigation">
				<td><a id = "logo" href="../html/Homepage.html">Restaurant</a></td>
				<td><a class ="nav" href="../html/UnderConstruction.html">Services</a></td>
				<td><a class ="nav" href="Menu.php">Menus</a></td>
				<td><a class ="nav" href="../html/UnderConstruction.html">Gallery</a></td>
				<td><a class ="nav" href="../html/contact.html">Contact</a></td>
                <?php 
                    // checking to see if the user's first name and last name are within the session
                    if(isset($_GET['email']) && isset($_GET['password'])) {
                        //replacing Login button with welcome message if user is logged in
                        echo "<td class='nav'>Welcome $first_name $last_name</td>";
                        echo "<td class='nav'><a href='logout.php'>Logout</a></td>";
                    }
                    else {
                        // displaying  login message if user is not logged in
                        echo "<td><a class ='nav' id = 'login' href='login.php'>Log in</a></td>";
                    }
                ?>
				<td><a href="Shopping Cart.html"><img id = "shct" src="../photos/Shoppingcart.png" alt="shopping cart" width="41.5px"></td>
			</tr>
		</table>
	</header>
    
    <fieldset id="Menu" style="fill: white; margin-top:5px">
        <h1 style="text-align: center"><b>Dinner Specials</b> <span id="menuheading"></span></h1>
        <div style="float:left; padding-left: 200px;">
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 1" value="15.00">
                    <h2 style="display:inline">Dish 1</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 2" value="20.00">
                    <h2 style="display:inline">Dish 2</h2>
                    <p style="padding-left:5px; display: inline;">$20.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 3" value="15.00">
                    <h2 style="display:inline">Dish 3</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 4" value="15.00">
                    <h2 style="display:inline">Dish 4</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
        </div>
        <div style="float:right; padding-right: 200px;">
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 5" value="15.00">
                    <h2 style="display:inline">Dish 5</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 6" value="15.00">
                    <h2 style="display:inline">Dish 6</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 7" value="15.00">
                    <h2 style="display:inline">Dish 7</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
            <p>
                <div id="menuitemtitle"><input type="checkbox" name= "Dish 8" value="15.00">
                    <h2 style="display:inline">Dish 8</h2>
                    <p style="padding-left:5px; display: inline;">$15.00</p>
                </div id="menuitem">
                <p style="margin:0px"> 
                    <br />Lorem ipsum dolor sit amet, consectetur 
                    <br />incididunt ut labore et dolore magna aliqua. 
                    <br />exercitation ullamco laboris nisi ut aliquip.
                </p>
            </p>
        </div>
    </fieldset>
  </body>
</html>