<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mrinala Glow </title>
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="box.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.jpg" class = "logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
               
<div><?php 
$count=0;
if(isset($_SESSION['cart']))
{
    $count=count($_SESSION['cart']);
}
?>
<li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"> <?php echo $count; ?></i></a></li>
    </div>
                <a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></a></i>
            </ul>
        </div>
        <div id="mobile">
        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href="cart.php"><i class="fa fa-shopping-bag" > <?php echo $count; ?></a></i>
                 <i id="bar" class="fas fa-outdent" > </i>
                
                 
        </div>
    </section>
    
    <script src="script.js"></script>
    <script src="app.js"></script>
   
    
    </body>
    
</html>