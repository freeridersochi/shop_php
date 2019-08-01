<?php 

require_once '../src/include/database.php';
require_once '../src/include/nav_functions.php';

$categories = get_categories();
$items = get_items(); 
$bests = get_best();

require_once '../src/include/include.php';

$basket_data = [ 
                'items' => $items,
                'bests' => $bests
             ];

$basket_page = include_template('../src/templates/basket.php', $basket_data );

$include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $basket_page
                                                ]);
print($include_result);

?>