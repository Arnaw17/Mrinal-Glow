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
    <img src="image/tshirt1.jpeg" width=" 80%" id=MainImg alt="">
</div>   
<div class="single-pro-details">

    <form action = "manage_cart.php" method="POST">
   
   
  <h4> Product Details</h4>
    <p> Your unique style with our high-quality Customized T-Shirts. Whether you're looking to showcase your creativity, promote your brand, or commemorate a special event, our customizable t-shirts offer endless possibilities. Made from premium materials, these t-shirts are designed for comfort, durability, and a perfect fit.</p>
        <h4 >Key Benefits </h4>
        <ul style="margin-top:20px;">
            <li>Personalized Design: Choose your own text, images, or artwork to create a one-of-a-kind t-shirt.</li>
            <li>High-Quality Printing: Advanced printing technology ensures vibrant colors and sharp details that last.
</li>
            <li>Comfortable Fabric: Made from 100% cotton or a cotton blend for a soft, breathable feel.</li>
            <li>Durable Construction: Double-stitched seams and reinforced necklines for long-lasting wear.</li>
            <li>Variety of Sizes: Available in a wide range of sizes, from XL to XXL, to fit everyone.</li>
            <li>Multiple Colors: Choose from a variety of base colors to match your design and style preferences.</li>
            
        </ul>
       
        <h4 style="margin-top:20px;">Product Details </h4>
        <ol>
            <li> 
            Material Options: 100% Cotton, Cotton-Polyester Blend</li>
           <li>Fabric Weight: 150-180 GSM (lightweight and breathable)</li>
           <li>Neckline: Crew Neck or V-Neck</li>
           <li>Sleeve Style:Short Sleeve or Long Sleeve</li>
           <li>Printing Method: Direct-to-Garment (DTG), Screen Printing, or Heat Transfer</li>
            
        </ol>
        <h4 style="margin-top:20px;">Customization Options: </h4>
        <ol>
            <li>Design Upload: Easily upload your own design, logo, or artwork.
</li>
<li>Text Customization: Add personalized text in various fonts and colors.</li>
<li>Pre-Made Templates: Choose from a selection of templates and modify them to suit your needs.</li>    
        </ol>
        <h4 style="margin-top:20px;">Packaging:</h4>
        <ul>
            <li>Each customized t-shirt is carefully packaged in an eco-friendly, resealable bag to ensure it arrives in perfect condition. </li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Price</h4>
        <ul>
            <li> Prices vary based on customization options, starting from Rs 199/. Discounts available for bulk orders.</li>
           
            
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