<?php 

require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function

// Get data from "nav_functions.php"
$categories = get_categories();
$items = get_items(); 
$bests = get_best();
$new_prod_page_number = intval($_GET['new_prod_page']??0);
$new_page = get_page($items, $new_prod_page_number, 8);
$pop_prod_page_number = intval($_GET['pop_prod_page']??0);
$pop_page = get_page($items, $pop_prod_page_number, 4);

//Use data from "nav_functions.php" in variable $home_data
$home_data = [ 
                'items' => $items,
                'bests' => $bests,
                'new_page' => $new_page,
                'pop_page' => $pop_page
             ];

// Use variable $home_data in Include function
$home_page = include_template('./src/templates/home.php', $home_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $home_page,
                                                'styles' => [],
                                                'scripts' => []
                                                ]);
//Show final template with include template
print($include_result);

?>
