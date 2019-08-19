<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();

$login_page = include_template('src/templates/login.php');

render_page([ 'categories' => $categories, 
              'content' => $login_page,
              'styles' => ['../css/login.css'],
              'scripts' => []
]);
