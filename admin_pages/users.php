<?php 

require_once '../src/include/nav_functions.php';
require_once '../src/include/include.php';

$user_page = include_template('../src/templates/admin_users.php');

render_back_page([  
                'content' => $user_page,
                'styles'=> ['adminUsers.css']
            
]);