<?php
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/product_functions.php';
require_once 'src/include/include.php';

if($_SERVER['REQUEST_METHOD']==="POST"){
    $product_id=intval($_POST['product_id']);
    $size=intval($_POST['size']);
    $orders = $_SESSION['orders'];
    if(!$orders){
        $orders=[];
    }
    $orders[] = [
                'product' => $product_id,
                'size' => $size,
                'quantity' => 1
                ];
    $_SESSION['orders'] = $orders;
    header('Location: busket.php');
    die();
}

http_response_code(404);
render_page([
            'content' => include_template('src/templates/404.php')
]);
die;
