<?php 
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$item_id = $_GET['item_id'];
$item_cat = $_GET['item_cat'];
$categories = get_categories();
$product = get_all($item_id); 
$cat_prod = get_cat_items($item_cat); 

$product_data = [
    'product' => $product,
    'product_cat' => $cat_prod   
];

$product_page = include_template('src/templates/product_cart.php', $product_data );

render_page([
             'categories' => $categories,
             'content' => $product_page,
             'styles' => ['product.css']
]);
