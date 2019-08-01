<?php 

require_once '../src/include/database.php';
require_once '../src/include/nav_functions.php';

$categories = get_categories();

require_once '../src/include/include.php';

$registration_data = [ 
                'items' => $items,
                'bests' => $bests
             ];

$registration_page = include_template('../src/templates/registration.php', $registration_data );

$include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $registration_page
                                                ]);
print($include_result);

?>