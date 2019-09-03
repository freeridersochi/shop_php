<?php 

require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function

//Use data from "nav_functions.php" in variable 
$checkout_data = [];

// Use variable $home_data in Include function
$checkout_final_page = include_template('./src/templates/checkout_final.php', $checkout_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [                                           
                                                'content' => $checkout_final_page,
                                                'styles' => ['checkout_final.css'],
                                                'scripts' => []
                                                ]);
//Show final template with include template
print($include_result);
