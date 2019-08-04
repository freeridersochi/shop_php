<?php 

require_once '../src/include/database.php';
require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$categories = get_categories();

$registration_data = [];

$registration_page = include_template('../src/templates/registration.php', $registration_data );

$include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $registration_page
                                                ]);
print($include_result);

?>