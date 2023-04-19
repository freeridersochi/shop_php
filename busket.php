<?php
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/product_functions.php';
require_once 'src/include/include.php';

if($_SERVER['REQUEST_METHOD']==="POST"){
  
    $orders=[];

    for ($i=0 ; $i <= sizeof($_POST['product'])-1; $i++){
        $product = intval($_POST['product'][$i]);
        $size = $_POST['size'][$i];
        $quantity = intval($_POST['quantity'][$i]);
        $orders[$i] = [
            'product' => $product,
            'size' => $size,
            'quantity' => $quantity
            ];
        }
    $_SESSION['orders'] = $orders; 
    
    $quantity_on_stock = get_size_quantity($orders[$i]['size']);
    
    if( $quantity > $quantity_on_stock['quantity']){
    $empty_on_stock = include_template('src/templates/disable_on_stock.php');
    render_page([
              'title' => 'Корзина',
              'content' => $empty_on_stock,
              'styles' => ['backet.css'],
              'scripts' => ['backet.js']
            ]); 
         die();
         }
   
    if(sizeof($orders)===0){
        $empty_backet_page = include_template('src/templates/empty_busket.php');
        render_page([
              'title' => 'Корзина',
              'content' => $empty_backet_page,
              'styles' => ['backet.css'],
              'scripts' => ['backet.js']
        ]); 
        die();
    }
    header('Location: checkout.php');
 }

$backet_page = include_template('src/templates/busket.php');

render_page([
              'title' => 'Корзина',
              'content' => $backet_page,
              'styles' => ['backet.css'],
              'scripts' => ['backet.js']
]);

print($include_result);
