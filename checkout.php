<?php 

require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function
require_once './src/include/user_function.php';

// Get data from "nav_functions.php"
$categories = get_categories();

//Not user form
$errors=[];
if($_SERVER['REQUEST_METHOD']==="POST"){
    
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

if( $name === '' ){
    $errors['name'] = "Enter name";
    }
if ( $phone === ''){
    $errors['phone'] = "Enter phone";
    }
if ( $email === ''){
    $errors['email'] = "Enter email";
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Wrong email";
    }
if(sizeof($errors) === 0 ){
    save_data($name, $phone, $email);
    var_dump("You are not User");
    }
}

//User form
$user_errors=[];
if($_SERVER['REQUEST_METHOD']==="POST"){

$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];

if( $user_email === ''){
    $user_errors['user_email'] = "Enter email";
}else if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
    $user_errors['user_email'] = "Wrong email";
    }
if ( $user_password === '' ){
    $user_errors['user_password'] = "Enter password";
    }
if(sizeof($user_errors) === 0){    
    login_user($user_email, $user_password);
    var_dump("You are User"); 
    }
}

//data for temlpate
$checkout_data = [
    'errors' => $errors,
    'user_errors' => $user_errors,
    'fields' => $_POST
];

// Use variable $home_data in Include function
$checkout_page = include_template('./src/templates/checkout.php', $checkout_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $checkout_page,
                                                'styles' => ['checkout.css'],
                                                'scripts' => ['checkout.js']
                                                ]);
//Show final template with include template
print($include_result);
