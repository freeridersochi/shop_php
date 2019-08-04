<?php 

require_once '../src/include/database.php';
require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$categories = get_categories();
$items = get_items(); 
$bests = get_best();

$cat_data = [ 
                'items' => $items,
                'bests' => $bests
             ];

$cat_page = include_template('../src/templates/cat_one.php', $cat_data );

$include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $cat_page
                                                ]);
print($include_result);

?>