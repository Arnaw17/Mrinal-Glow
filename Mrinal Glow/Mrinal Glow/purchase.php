<?php
session_start();
$conn=mysqli_connect("localhost","root", "", "mrinal glow");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
    window.location.href='cart.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
       $query1 = "INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Email`, `Address`, `Pin_Code`, `State_name`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]', '$_POST[Email]', '$_POST[address]','$_POST[pin_code]','$_POST[state_name]','$_POST[pay_mode]')";
       if(mysqli_query($conn, $query1)){
        $Order_Id=mysqli_insert_id($conn);  
        $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($conn, $query2);
        if($stmt){
                mysqli_stmt_bind_param($stmt,"isii", $Order_Id,$Item_Name, $Price, $Quantity);
                foreach($_SESSION['cart']as $key => $values){
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'] * $values['Quantity'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed');
                window.location.href='confirmation.php';
                </script>";
        }
        else{
            echo"<script>
            alert('SQL Query Prepared Eror');
            window.location.href='cart.php';
            </script>";
        }
       }
       else{
            echo"<script>
            alert('SQL Error');
            window.location.href='cart.php';
            </script>";
       }
       $orderId = mysqli_insert_id($conn);
        
       // Store the order ID in a session variable
       $_SESSION['order_id'] = $orderId;
   
    }
    else if(isset($_POST['Mod_Quantity']))
    {
        $Item_Name = $_POST['Item_Name'];
        $Quantity = $_POST['Mod_Quantity'];
        $Price = $_POST['iprice'];

        $query = "UPDATE cart SET Quantity = '$Quantity', Price = '$Price' WHERE Item_Name = '$Item_Name'";
        if(mysqli_query($conn, $query)){
            echo "Cart updated successfully!";
        } else {
            echo "Error updating cart: " . mysqli_error($conn);
        }
    }
}
?>