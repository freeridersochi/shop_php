<?php
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/product_functions.php';
require_once 'src/include/include.php';

if($_SERVER['REQUEST_METHOD']==="POST"){    
    $size_id = intval($_POST['size_id']);
    $size = get_size($size_id);
    $orders = $_SESSION['orders'];
    if(!$orders){
        $orders=[];
    }
    $found = -1;
    for($i=0; $i < sizeof($orders); $i++){
        $order = $orders[$i];
        if($order['size'] === $size_id ){
            $found = $i;
        }
    }
    if($found>=0){
        $orders[$found]['quantity']+=1;  
    }else{
        $orders[] = [
        'product' => $size['product_id'],
        'size' => $size_id,
        'quantity' => 1
        ];
    }

    $_SESSION['orders'] = $orders;
    header('Location: busket.php');
    die();
    }

http_response_code(404);
render_page([
            'content' => include_template('src/templates/404.php')
]);
die;
