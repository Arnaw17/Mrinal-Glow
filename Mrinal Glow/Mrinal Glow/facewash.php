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
    <img src="image/facewash2.jpeg" width=" 80%" id=MainImg alt="">
</div>   
<div class="single-pro-details">

    <form action = "manage_cart.php" method="POST">
   
   
  <h4> Product Details</h4>
    <p>  Experience the rejuvenating power of natural clay with our Multani Mitti Face Wash. Specially formulated to harness the deep-cleansing properties of Multani Mitti (Fuller’s Earth), this face wash provides a thorough yet gentle cleanse, leaving your skin feeling fresh, smooth, and radiant. Ideal for daily use, it helps to balance oil production, reduce impurities, and promote a healthy, glowing complexion.</p>
        <h4 >Key Benefits </h4>
        <ul style="margin-top:20px;">
            <li>Deep Cleansing: Effectively removes dirt, oil, and impurities, preventing clogged pores and acne.</li>
            <li>Oil Control: Absorbs excess oil, making it perfect for oily and acne-prone skin.
</li>
            <li>Skin Brightening: Helps even out skin tone, reducing pigmentation and promoting a natural glow.</li>
            <li>Soothing and Refreshing: Provides a cooling effect that calms irritated skin.</li>
            <li>Gentle Exfoliation: Contains natural exfoliants that help remove dead skin cells, promoting a smoother complexion.</li>
            
        </ul>
       
        <h4 style="margin-top:20px;">Sutiable For </h4>
        <ul>
            <li> 
Suitable for All Skin Types: Each product is formulated to be effective yet gentle, making them suitable for all skin types, including sensitive skin.</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Packaging </h4>
        <ul>
            <li>The Multani Mitti Face Wash comes in a convenient, eco-friendly tube with a flip-top cap, ensuring easy use and preventing leaks.
</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Shelf Life:</h4>
        <ul>
            <li>24 months from the date of manufacture </li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Availability</h4>
        <ul>
            <li> Available on our website and select retail stores.</li>
           
            
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