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
$result = $pdo->query($sql);
if (!$row = $result->fetch()) {
  header('Location: ../html/create_account_message.html');
  exit();
} else {
  $email = $row['email'];
  $first_name = $row['first_name'];
  $last_name = $row['last_name'];
}

// close connection 
//$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="../css/menu.css" />
  <link rel="stylesheet" type="text/css" href="../css/HeaderButtons.css">
  <link rel="stylesheet" type="text/css" href="../css/global_style.css">
  <script defer src="../scripts/Menu.js"></script>

  <style>
    @font-face {
      font-family: Montserrat;
      src: url(../css/fonts/Montserrat/static/Montserrat-Regular.ttf);
    }

    body,
    html {
      font-family: Montserrat;
      background-image: url("../photos/../photos/photo-antipasto-platter-italian-food.jpg");
    }

    #menu {
      width: 50%;
      margin: auto;
      padding-top: 20px;
      padding-bottom: 20px;
      text-align: center;
      color: white;
      background: rgba(66, 66, 66, 0.80);
    }
  </style>
</head>

<body>
  <header id="headerbuttons">
    <table>
      <tr id="navigation">
        <td><a id="logo" href="../html/Homepage.html">Programmer's<br />Cafe</a></td>
        <td><a class="nav" href="../html/UnderConstruction.html">Services</a></td>
        <td><a class="nav" href="Menu.php">Menus</a></td>
        <td><a class="nav" href="../html/UnderConstruction.html">Gallery</a></td>
        <td><a class="nav" href="../html/contact.html">Contact</a></td>
        <?php
        // checking to see if the user's first name and last name are within the session
        if (isset($_GET['email']) && isset($_GET['password'])) {
          //replacing Login button with welcome message if user is logged in
          echo "<td class='nav'>Welcome $first_name $last_name</td>";
          echo "<td class='nav'><a href='logout.php'>Logout</a></td>";
        } else {
          // displaying  login message if user is not logged in
          echo "<td><a class ='nav' id = 'login' href='login.php'>Log in</a></td>";
        }
        ?>
        <td><a href="../html/Shopping Cart.html"><img id="shct" src="../photos/Shoppingcart.png" alt="shopping cart"
              width="41.5px"></td>
      </tr>
    </table>
  </header>


  <!-- <fieldset id="Menu" style="fill: white; margin-top:5px"> -->
  <br /><br />
  <section id='menu'>
    <?php
    echo "<h1 style='text-align: center; text-decoration: underline;'><b>Dinner Specials</b> <span id='menuheading'></span></h1>";
    function generateMenuItem($item)
    {
      $product_name = $item['product_name'];
      $product_description = $item['description'];
      $product_price = $item['price'];

      echo "<div class=\"menu-item\">";
      echo "<h3 class=\"item-title\">" . $product_name . " " . "<span class=\"item-description\">$" . $product_price . "</span></h3>";
      echo "<span class=\"item-price\">" . $product_description . "</span>";
      echo "<br />";
      echo "<input type=\"checkbox\" name=\"" . $product_name . "\" id=" . $product_name . " value=" . $product_price . ">";
      echo "<label for=" . $product_name . "> Add to cart</label><br>";
      echo "</div>";
    }

    $sql = "SELECT * FROM items;";
    $result = $pdo->query($sql);

    foreach ($result as $row) {
      generateMenuItem($row);
    }
    ?>
    <br /><button id='add_to_cart_btn'>Add to cart</button>
  </section>
  <script type="text/javascript" src="../js/Menu.js"></script>

</body>

</html>