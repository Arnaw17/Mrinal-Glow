<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="confirmation.css">
</head>
<body>
    <div class="container">
    <h1>Order Confirmation</h1>
    <?php
    // Start the session
   
    // Check if the order ID is set in the session
    if (isset($_SESSION['order_id'])) {
        // Get the order ID from the session
        $orderId = $_SESSION['order_id'];

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "mrinal glow");

        // Check if the database connection is successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch order details from the database based on the order ID
        $orderSql = "SELECT item_name, price, quantity FROM user_orders WHERE order_id = $orderId";
        $orderResult = mysqli_query($conn, $orderSql);

        // Fetch user details from the database based on the order ID stored in order_manager table
        $userSql = "SELECT om.Order_id, om.Full_Name, om.Phone_No, om.Email, om.Address, om.Pin_Code, om.State_name, om.Pay_Mode FROM order_manager om WHERE om.Order_id = $orderId";
        $userResult = mysqli_query($conn, $userSql);

        // Check if there are any rows returned for order details
        if (mysqli_num_rows($orderResult) > 0) {
            // Display the order details
            echo "<h2>Order Details:</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($orderResult)) {
                echo "<tr>
                        <td>" . $row['item_name'] . "</td>
                        <td>" . $row['price'] . "</td>
                        <td>" . $row['quantity'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            // If no rows are returned for order details, display a message
            echo "No items found for this order.";
        }

        // Check if there are any rows returned for user details
        if (mysqli_num_rows($userResult) > 0) {
            // Display the user details
            echo "<h2>User Details:</h2>";
            while ($row = mysqli_fetch_assoc($userResult)) {
                echo "<p><strong>Order ID:</strong> " . $row['Order_id'] . "</p>";
                echo "<p><strong>Full Name:</strong> " . $row['Full_Name'] . "</p>";
                echo "<p><strong>Phone Number:</strong> " . $row['Phone_No'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['Email'] . "</p>";
                echo "<p><strong>Billing Address:</strong> " . $row['Address'] . "</p>";
                echo "<p><strong>Pin Code:</strong> " . $row['Pin_Code'] . "</p>";
                echo "<p><strong>State Name:</strong> " . $row['State_name'] . "</p>";
                echo "<p><strong>Payment Mode:</strong> " . $row['Pay_Mode'] . "</p>";
            }
        } else {
            // If no rows are returned for user details, display a message
            echo "User details not found for this order.";
        }

        // Clear the order ID from the session
        unset($_SESSION['order_id']);

        // Close the database connection
        mysqli_close($conn);
    } else {
        // If the order ID is not set in the session, display an error message
        echo "<p>Sorry, there was an error processing your order. Please contact support for assistance.</p>";
    }
    ?>
    </div>
    <div class="button" >
        <a href="index.php">Home</a>
    </div>
</body>
</html>
