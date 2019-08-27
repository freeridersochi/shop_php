<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/promo_functions.php';
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

if(!$current_category){
    http_response_code(404);
    render_page([
                'categories' => $categories,
                'content' => 'Ooops! Category is not found!',
                'styles' => ['categoryOne.css'],
                'scripts' => []
    ]);
    die;
}

$promo_products = get_promo_products($current_category['id']);

$cat_data = [ 
              'cat_page'=>$cat_page,
              'category'=>$current_category,
              'promo_products'=>$promo_products
            ];

$cat_page = include_template('src/templates/cat_one.php', $cat_data);

render_page([
                'categories' => $categories,
                'content' => $cat_page,
                'styles' => ['categoryOne.css'],
                'scripts' => []
]);