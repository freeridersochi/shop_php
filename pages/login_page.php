<?php 

require_once '../src/include/database.php';
require_once '../src/include/nav_functions.php';

$categories = get_categories();

require_once '../src/include/include.php';

$login_data = [ 
                'items' => $items,
                'bests' => $bests
             ];

$login_page = include_template('../src/templates/login.php', $login_data );

$include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $login_page
                                                ]);
print($include_result);

?>