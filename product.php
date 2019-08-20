<?php 
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include/product_function.php';

$item_id = $_GET['item_id'];
$item_cat = $_GET['item_cat'];
$categories = get_categories();
$cat_prod = get_cat_items($item_cat);
$product = get_product($item_id);

$product_data = [
    'product' => $product,
    'product_cat' => $cat_prod,
    'bests' => []
    
];

$product_page = include_template('src/templates/product.php', $product_data );

render_page([
             'categories' => $categories,
             'content' => $product_page,
             'styles' => ['product.css','product_slider.css'],
             'scripts' => ['product_slider.js']
]);
