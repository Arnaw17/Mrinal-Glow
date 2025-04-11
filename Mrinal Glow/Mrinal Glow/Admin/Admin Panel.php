<?php 
require("Connection.php");
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: Admin Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet"  href="admin login.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="header">
    <h1>WELCOME TO ADMIN PANEL - <?php echo$_SESSION['AdminLoginId']?></h1> 
    <form method="POST">
    <button name="Logout">Log Out</button>
</form>
    </div>
    <div class="container mt-5" >
        <div class="row">
            <div class="col-lg-12">
            <table class="table text-center table-dark">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Pin Code</th>
      <th scope="col">State</th>      
      <th scope="col">Pay Mode</th>      
      <th scope="col">Orders</th>      

    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        $query= "SELECT * FROM `order_manager`";
       $user_result= mysqli_query($con, $query);
       while($user_fetch=mysqli_fetch_assoc($user_result))
       {
        echo" 
        <tr>
            <td>$user_fetch[Order_Id]</td>
            <td>$user_fetch[Full_Name]</td>
            <td>$user_fetch[Phone_No]</td>
            <td>$user_fetch[Address]</td>
            <td>$user_fetch[Pin_Code]</td>
            <td>$user_fetch[State_name]</td>
            <td>$user_fetch[Pay_Mode]</td>
            
            <table class='table text-center table-dark'>
            <thead>
              <tr>
                <th scope='col'>Item Name</th>
                <th scope='col'>Price</th>
                <th scope='col'>Quantity</th>
                
          
              </tr>
            </thead>
            <tbody>
            ";
             $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
             $order_result=mysqli_query($con,$order_query);
             while($order_fetch=mysqli_fetch_assoc($order_result)){
                echo"
                    <tr>
                    <td>$order_fetch[Item_Name]</td>
                    <td>$order_fetch[Price]</td>
                    <td>$order_fetch[Quantity]</td>
                    </tr>
                ";
            }
            echo"
                </tbody>
                </table>
                </td>
            
        </tr>";
       }
        ?>
       
    </tr>
  </tbody>
</table>
        </div>
    </div>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Admin Login.php");
    }
     ?>

</body>
</html>