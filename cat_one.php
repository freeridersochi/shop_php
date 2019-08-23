<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/promo_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();

$cat_id = $_GET['id'];
$promo_mark = $categories[$cat_id -1]['promo'];
$promo = get_promo($promo_mark);

$items = get_items($i);

$cat_prod_page = intval($_GET['page']??0);
$cat_page = get_page($items, $cat_prod_page, 4);
$category_name = $_GET['name'];

foreach( $categories as $category ){
    if ($category_name == $category['alias']){
        $current_category = $category; 
    }
};

$cat_data = [ 
              'cat_page'=>$cat_page,
              'category'=>$current_category,
              'promo'=>$promo
            ];

$cat_page = include_template('src/templates/cat_one.php', $cat_data);

render_page([
                'categories' => $categories,
                'content' => $cat_page,
                'styles' => ['categoryOne.css'],
                'scripts' => []
]);