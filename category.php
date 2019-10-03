<?php
require_once 'src/include/nav_functions.php';
require_once 'src/include/product_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();
$items = get_items($i);
$cat_prod_page = intval($_GET['page']??0);
$cat_page = get_page($items, $cat_prod_page, 17);
$category_name = $_GET['name'];

foreach( $categories as $category ){
    if ($category_name == $category['alias']){
        $current_category = $category;
    }
};


//404
if(!$current_category){
    http_response_code(404);
    $cat_page = include_template('src/templates/404.php', $cat_data);
    render_page([
                'content' => $cat_page
    ]);
    die;
}

//promo
$promo_products = get_promo_products($current_category['id']);

$cat_data = [
              'cat_page'=>$cat_page,
              'category'=>$current_category,
              'promo_products'=>$promo_products
            ];

$cat_page = include_template('src/templates/category.php', $cat_data);

render_page([
                'title' => 'Категория "'.my_mb_ucfirst($current_category['name']).'"',
                'categories' => $categories,
                'content' => $cat_page,
                'styles' => ['categoryOne.css']
]);
