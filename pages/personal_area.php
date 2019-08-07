<?php 

require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$categories = get_categories();

$cat_page = include_template('../src/templates/pers_area.php');

render_page([ 'categories' => $categories, 
              'content' => $cat_page,
              'styles' => ['personalArea.css']
]);

