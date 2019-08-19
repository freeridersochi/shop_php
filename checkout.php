<?php 

require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function

// Get data from "nav_functions.php"
$categories = get_categories();

//Use data from "nav_functions.php" in variable 
$checkout_data = [];

// Use variable $home_data in Include function
$checkout_page = include_template('./src/templates/checkout.php', $checkout_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $checkout_page,
                                                'styles' => ['checkout.css'],
                                                'scripts' => ['script']
                                                ]);
//Show final template with include template
print($include_result);
