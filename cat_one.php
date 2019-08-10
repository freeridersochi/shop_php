<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();
$items = get_items(); 

$cat_data = [ 
              'items'=>$items,
              'bests'=>$items
            ];

$cat_page = include_template('src/templates/cat_one.php', $cat_data);

render_page( [
                'categories' => $categories,
                'content' => $cat_page,
                'styles' => ['categoryOne.css']            
]);