<?php 

require_once '../src/include/database.php';
require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$categories = get_categories();
$items = get_items(); 
$bests = get_best();

$basket_data = [];

$basket_page = include_template('../src/templates/basket.php', $basket_data );

$include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $basket_page
                                                ]);
print($include_result);

?>