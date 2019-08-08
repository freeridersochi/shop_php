<?php 

require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$categories = get_categories();

$basket_page = include_template('../src/templates/basket.php');

render_page([ 'categories' => $categories, 
              'content' => $basket_page,
              'styles' => ['basket.css']
]);