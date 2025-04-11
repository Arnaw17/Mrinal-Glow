<?php
  session_start();
  
  if (isset($_POST['Item_Name']) && isset($_POST['Mod_Quantity'])) {
    $itemName = $_POST['Item_Name'];
    $modQuantity = $_POST['Mod_Quantity'];
    
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['Item_Name'] == $itemName) {
        $value['Quantity'] = $modQuantity;
        $_SESSION['cart'][$key] = $value;
        break;
      }
    }
    
    $totalPrice = 0;
    foreach ($_SESSION['cart'] as $value) {
      $totalPrice += $value['Price'] * $value['Quantity'];
    }
    
    echo json_encode(['totalPrice' => $totalPrice]);
  }
?>