<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();
$items = get_items(); 
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
              'category'=>$current_category
            ];

$cat_page = include_template('src/templates/cat_one.php', $cat_data);

render_page( [
                'categories' => $categories,
                'content' => $cat_page,
                'styles' => ['categoryOne.css']            
]);