<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();

$pers_area_page = include_template('src/templates/personal_area.php');

render_page([ 'categories' => $categories, 
              'content' => $pers_area_page,
              'styles' => ['personalArea.css'],
              'scripts' => []
]);

