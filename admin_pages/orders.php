<?php 

require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$order_page = include_template('../src/templates/admin_orders.php');

render_back_page([  
                'content' => $order_page, 
                'styles' => ['adminOrderDetail.css']
]);