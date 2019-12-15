<?php
require_once "product_functions.php";

function get_total_cost(){
  $total=0;
  foreach($_SESSION['orders'] as $order){
     $product = get_product($order['product']);
     $total = $total + $product['price'] * $order['quantity'];
  };
  return $total;
};


function get_total_items(){
  
  for($i=0; $i<count($_SESSION['orders']); $i++){
      $total_in_position = $_SESSION['orders'][$i]['quantity'];
      $total += $total_in_position;
  };
  return $total;  
};

