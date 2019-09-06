<?php 
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/product_function.php';
require_once 'src/include/include.php';

if($_SERVER['REQUEST_METHOD']==="POST"){
    $product_id=intval($_POST['product_id']);
    $size=intval($_POST['size']);
    $order = $_SESSION['order'];
    if(!$order){
        $order=[];
    }
    $order[] = [
                'product' => $product_id, 
                'size' => $size
                ];
    $_SESSION['order'] = $order;
    header('Location: backet.php');
}

$title="Basket";

$categories = get_categories();

$backet_page = include_template('src/templates/backet.php');

render_page([ 
              'title' => $title,
              'content' => $backet_page,
              'styles' => ['backet.css'],
              'scripts' => ['backet.js']
]);