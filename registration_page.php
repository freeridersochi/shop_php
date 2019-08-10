<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';

$categories = get_categories();

$registration_page = include_template('src/templates/registration.php');

render_page([ 'categories' => $categories, 
              'content' => $registration_page,
              'styles' => ['registration.css']
]);

