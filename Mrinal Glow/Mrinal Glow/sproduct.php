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
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

<section id="prodetails" class="section-p1">
<div class="single-pro-image">
    <img src="image/product1.jpeg" width=" 80%" id=MainImg alt="">
</div>    
<div class="single-pro-details">

    <form action = "manage_cart.php" method="POST">
   
    <h2> Rs 126 / 200gm</h2>
    <h4> 10%off </h4>
    <h2> <s> Rs 140 / 200gm</s></h2>
    
   
 <button type = "submit" class="normal" name="Add_To_Cart" >Add To Cart</button>
  <input type="hidden" name = "Item_Name" value= "Multani Mitti Powder|Earth Fuller's">
  <input type="hidden" name = "Price" value= "126">
  <h4> Product Details</h4>
    <p> Multani Mitti, also known as Fuller’s Earth, is a natural clay substance renowned for its ability to absorb impurities and excess oil from the skin. Our Multani Mitti Powder is sourced from the finest natural deposits and is 100% pure, ensuring you receive the highest quality product for your skincare and haircare routines.</p>
        <h4>Key Benefits </h4>
        <ul>
            <li>Deep Cleansing: Effectively removes impurities, dirt, and excess oil from your skin, leaving it feeling refreshed and rejuvenated.</li>
            <li>Oil Control: Naturally absorbs excess oil, helping to reduce the occurrence of acne and blemishes, making it perfect for oily and acne-prone skin.</li>
            <li>Skin Brightening: Helps to even out skin tone and reduce pigmentation, giving your skin a healthy, radiant glow.</li>
            <li>Cooling Effect: Provides a soothing, cooling sensation, reducing inflammation and calming irritated skin.</li>
            <li>Exfoliation: Gently exfoliates dead skin cells, promoting a smoother, softer complexion.</li>
        </ul>
        <h4 style="margin-top:20px;">Usage Instructions </h4>
        <ul>
            <li>Face Mask: Mix 1-2 tablespoons of Multani Mitti Powder with water, rose water, or milk to form a smooth paste. Apply evenly to your face and neck, avoiding the eye area. Leave on for 10-15 minutes, then rinse off with lukewarm water.</li>
            <li>Hair Mask: Combine Multani Mitti Powder with water to make a thick paste. Apply to your scalp and hair, leave on for 20-30 minutes, then rinse thoroughly. This helps to cleanse the scalp, remove dandruff, and promote healthy hair growth.</li>
            
        </ul>
        <h4 style="margin-top:20px;">Ingredients </h4>
        <ul>
            <li>100% Pure Multani Mitti (Fuller’s Earth)</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Sutiable For </h4>
        <ul>
            <li> All skin types, especially beneficial for oily and acne-prone skin.</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Packaging </h4>
        <ul>
            <li>Available in eco-friendly, resealable pouches to preserve freshness and potency.</li>
           
            
        </ul>
        <h4 style="margin-top:20px;">Why Choose Us:</h4>
        <ul>
            <li>Pure and Natural: No additives, preservatives, or artificial ingredients.</li>
            <li>Ethically Sourced: Sourced from the finest quality Fuller’s Earth deposits.</li>
            <li>Cruelty-Free: Never tested on animals and vegan-friendly.</li>
            
        </ul>
        <h4 style="margin-top:20px;">Transform your skincare routine with the natural power of Multani Mitti Powder. Reveal a brighter, clearer, and more radiant complexion with every use.</h4>
</div>

</form>
</section>


<footer class="section-p1" style="background-color: #fcb591f8;">
    <div class="col"style="font-weight: bolder;">
        <img class="logo"src="logo.jpg" alt="">
     
        <p><strong>Email:</strong>   contact.mrinalalglow@gmail.com </p>   
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
    <script src="app.js"></script>
   </body>
</html>