<?php 

require_once './src/include/database.php';
require_once './src/include/nav_functions.php';

$categories = get_categories();
$items = get_items(); 
$bests = get_best();

require_once './src/include/include.php';

$home_data = [ 
                'items' => $items,
                'bests' => $bests
             ];

$home_page = include_template('./src/templates/main.php', $home_data );

$include_result = include_template('./src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $home_page
                                                ]);
print($include_result);

?>
