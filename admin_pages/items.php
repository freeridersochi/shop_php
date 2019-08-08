<?php 

require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$items_page = include_template('../src/templates/admin_items.php');

render_back_page([  
                'content' => $items_page, 
                'styles' => ['adminItems.css']
]);