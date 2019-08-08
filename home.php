<?php 

require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function

// Get data from "nav_functions.php"
$categories = get_categories();
$items = get_items(); 
$bests = get_best();

//Use data from "nav_functions.php" in variable $home_data
$home_data = [ 
                'items' => $items,
                'bests' => $bests
             ];

// Use variable $home_data in Include function
$home_page = include_template('./src/templates/main.php', $home_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $home_page,
                                                'styles' => []
                                                ]);
//Show final template with include template
print($include_result);

?>
