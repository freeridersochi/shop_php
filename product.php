<?php 
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include/product_function.php';

$item_id = $_GET['item_id'];

$categories = get_categories();
$product = get_product($item_id);
$sizes = get_sizes($item_id);
$items = get_items();

$pop_prod_page_number = intval($_GET['pop_prod_page']??0);
$pop_page = get_page($items, $pop_prod_page_number, 4);

$product_data = [
    'items' => $items,
    'product' => $product,
    'sizes' => $sizes,
    'pop_page' => $pop_page  
];

$product_page = include_template('src/templates/product.php', $product_data );

render_page([
             'categories' => $categories,
             'content' => $product_page,
             'styles' => ['product.css','product_slider.css'],
             'scripts' => ['product_slider.js']
]);
