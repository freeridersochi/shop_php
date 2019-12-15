<?php
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include/product_functions.php';

$item_id = $_GET['item_id'];
$product = get_product($item_id);
$sizes = get_sizes($item_id);
$items = get_items();

$other_prod_page_number = intval($_GET['other_prod_page']??0);
$other_page = get_page($items, $other_prod_page_number, 4);

$product_data = [
    'items' => $items,
    'product' => $product,
    'sizes' => $sizes,
    'other_page' => $other_page
];

$category= get_categories();
$category_name = $category[$product['category']-1]['name'];
$title =  my_mb_ucfirst($category_name).'/'.mb_substr($product['name'], 9, 20, 'UTF-8');


if(!$item_id){
    http_response_code(404);
    $cat_page = include_template('src/templates/404.php', $cat_data);
    render_page([
        'content' => include_template('src/templates/404.php', $cat_data)
    ]);
    die;
}

$product_page = include_template('src/templates/product.php', $product_data );

render_page([
             'title' => $title,
             'content' => $product_page,
             'styles' => ['product.css','product_slider.css'],
             'scripts' => ['product_slider.js']
]);
