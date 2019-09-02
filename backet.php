<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();

$backet_page = include_template('src/templates/backet.php');

render_page([ 'categories' => $categories, 
              'content' => $backet_page,
              'styles' => ['backet.css'],
              'scripts' => ['backet.js']
]);