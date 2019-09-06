<?php 

require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function
require_once 'src/include/promo_functions.php';//link promo function


$promo_id = 1;
// Get data from "nav_functions.php"
$items = get_items(); 
$bests = get_best();


// Big pagination
$new_prod_page_number = intval($_GET['new_prod_page']??0);
$new_page = get_page($items, $new_prod_page_number, 8);

// Small pagination
$pop_prod_page_number = intval($_GET['pop_prod_page']??0);
$pop_page = get_page($items, $pop_prod_page_number, 4);

//Promo
$promo_products = get_promo_products($promo_id);

//Use data from "nav_functions.php" in variable $home_data
$home_data = [ 
                'items' => $items,
                'new_page' => $new_page,
                'pop_page' => $pop_page,
                'promo_products' => $promo_products
             ];

// Use variable $home_data in Include function
$home_page = include_template('./src/templates/home.php', $home_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [ 
                                                'title' => $title,
                                                'content' => $home_page,
                                                'styles' => [],
                                                'scripts' => ['backet.js']
                                                ]);
//Show final template with include template
print($include_result);

?>
