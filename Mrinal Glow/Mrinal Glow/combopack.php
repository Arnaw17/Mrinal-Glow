<?php include("header.php");

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mrinala Glow </title>
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        </style>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   

<section id="prodetails" class="section-p1">
<div class="single-pro-image">
    <img src="image/combopack.jpeg" width=" 80%" id=MainImg alt="">
</div>   
<div class="single-pro-details">

    <form action = "manage_cart.php" method="POST">
   
   
  <h4> Product Details</h4>
    <p> Indulge in the ultimate skincare experience with our carefully curated combo pack, designed to cater to all your skincare needs. This combo includes Multani Mitti Powder, Rose Water, Facial Tissues, and an upcoming Moisturizer. Together, these products provide a complete, natural, and effective skincare regimen, ensuring your skin looks and feels its best.</p>
        <h4>Key Benefits </h4>
        <ul>
            <li>Comprehensive Skincare: This combo provides a holistic skincare solution, from deep cleansing and toning to moisturizing and refreshing.Natural Ingredients: All products are made with natural ingredients, free from harsh chemicals, ensuring they are gentle on your skin.</li>
            
        </ul>
       
        <h4 style="margin-top:20px;">Sutiable For </h4>
        <ul>
            <li> 
Suitable for All Skin Types: Each product is formulated to be effective yet gentle, making them suitable for all skin types, including sensitive skin.</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Packaging </h4>
        <ul>
            <li>The combo is packaged in an eco-friendly, reusable box, ensuring minimal environmental impact while keeping your products safe and fresh.
</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Shelf Life:</h4>
        <ul>
            <li>Multani Mitti Powder: 24 months</li>
            <li> Rose Water: 18 months </li>
            <li>Facial Tissues: N/A</li>
            <li>Moisturizer: 24 months </li>
            
        </ul>

</div>

</form>
</section>

<section id="Review" class="section-p1 section-m1">
    <div class="Reviewtext">
        <h4>Sign Up For Review</h4>
       
    </div>
    <div class="form">
        <input type = "text" placeholder="Your Email address">
        <button class="normal"> Sign Up </button>
    </div>
</section>
<footer class="section-p1" style="background-color: #fcb591f8;">
    <div class="col"style="font-weight: bolder;">
        <img class="logo"src="logo.jpg" alt="">
        <h4>Contact</h4>
        <p><strong>Address:</strong>  Near A.N. College Dumka </p>
        <p><strong>Phone:</strong>  1234567890 </p>
        <p><strong>Address:</strong>  10:00 - 5:00 Mon-Fri </p>
        
    </div>
    <div class="col"style="font-weight: bolder;">
        <h4 >About</h4>
        <a href="About.php">About us </a>
        <a href="#">Delivery Information</a>
        <a href="Contact.php">Contact us </a>

    </div>
    <div class="col" style="font-weight: bolder;">
       
        <a href="cart.php">View Cart</a>
        <a href="cart.php">MY Wishlist</a>
        <a href="Contact.php">Help</a>
        <img src="img/cod.jpg" width="120px">
        <p style="font-size: 43px;">Pehle Saaman Fir Daam...</p>

    </div>

   
    <div class="copyright">
        <p>© Mrinala Glow 2024 </p>
    </div>
</footer>
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img")

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
    </script>
<script>

</script>
    <script src="script.js"></script>
    <script src="app1.js"></script>
   </body>
</html>