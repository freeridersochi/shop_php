<?php
require_once './src/include/common.php';//link session
require_once './src/include/nav_functions.php';// link nav 
require_once './src/include/include.php'; //link include functions
require_once './src/include/checkout_functions.php';

$order_number = $_GET['order'];

if(!$order_number){
        $checkout_error = include_template('src/templates/checkout_error.php');
        render_page([
              'title' => 'Оформление заказа',
              'content' => $checkout_error,
              'styles' => ['checkout_final.css']
        ]); 
        die();
}

$checkout_final_page = include_template('./src/templates/checkout_final.php', ['order_number' => $order_number] );

$include_result = include_template('./src/templates/layout.php', [
                                    'title' => 'Оформление заказа',
                                    'content' => $checkout_final_page,
                                    'styles' => ['checkout_final.css'],
                                    'scripts' => []
                                    ]);

print($include_result);