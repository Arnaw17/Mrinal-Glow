<?php
include("header.php");

$total = 0;
$shipping_charge=60;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $sub_total = $value['Price'] * $value['Quantity'] +$shipping_charge;
        $total += $sub_total;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="container">
        <div id="cart">
            <div>
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Shipping Charge</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                $total_price = $value['Price'] * $value['Quantity']+$shipping_charge;
                                $total_with_shipping = $total_price + $shipping_charge;
                                echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>".htmlspecialchars($value['Item_Name'])."</td>
                                    <td>".htmlspecialchars($value['Price'])."<input type='hidden' class='iprice' value='".htmlspecialchars($value['Price'])."'></td>
                                    <td>
                                        <form method='POST' action='manage_cart.php'>
                                            <input class='text-center iquantity' type='number' name='Mod_Quantity' value='".htmlspecialchars($value['Quantity'])."' min='1' max='10'>
                                            <input type='hidden' name='Item_Name' value ='".htmlspecialchars($value['Item_Name'])."'>
                                            <button class='update-quantity' data-item-name='".htmlspecialchars($value['Item_Name'])."'>Update</button>
                                        </form>
                                    </td>
                                    <td class='itotal'>".htmlspecialchars($shipping_charge)."</td>
                                    <td class='itotal'>".htmlspecialchars($total)."</td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name='Remove_Item'>Remove</button>
                                            <input type='hidden' name='Item_Name' value ='".htmlspecialchars($value['Item_Name'])."'>
                                        </form>
                                    </td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        
        <div id="total">
            <h4> Grand Total </h4>
           
            <h5 class="gtotal" id="gtotal"> Rs: <?php echo htmlspecialchars($total); ?> /-</h5>
            <br>
        </div>
        <?php 
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        ?>
        <form action="purchase.php" method="POST">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Your Full Name" name="full_name"  class="form-control" required>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input pattern="[0-9]"type="number" placeholder="Enter your Phone No"name="phone_no" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="text"   placeholder="Enter your email address" name="Email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input  type="text" placeholder="Enter your Proper Address" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Pin Code</label>
                <input  type="number" placeholder="Enter your City Pin Code" name="pin_code" class="form-control" size="6" required>
            </div>
            <div class="form-group">
                <label>State Name</label>
                <input  type="text"placeholder="Enter your State Name"name="state_name" class="form-control" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" id="flexRadioDefault1" value="COD" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    COD<b>( Pehle Saaman Fir Daam.. )</b>
                </label>
            </div>
            <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
        </form>
        <?php
        }
        ?>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
