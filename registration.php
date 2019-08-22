<?php 

require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include/user_function.php';

$categories = get_categories();
$errors=[];
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $password=$_POST['psw'];
    $confirm_password=$_POST['confirm_psw'];   
    if($name === ''){
        $errors['name']='Enter name!';
    }
    if($email === ''){
        $errors['email']='Enter email';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']='Wrong email';
    }
    if($password === ''){
        $errors['password']='Enter password';
    }
    if($confirm_password === ''){
        $errors['confirm_psw']='Confirm password';
    }
    if( sizeof($errors)===0 ){
        register($name, $email, $password);
        #Отправляем в нужное место
        header('Location: login.php');
    }
}; 

$registration_data = [
    'errors' => $errors,
    'fields' => $_POST
];

$registration_page = include_template('src/templates/registration.php', $registration_data);

render_page([ 
              'categories' => $categories, 
              'content' => $registration_page,
              'styles' => ['registration.css'],
              'scripts' => []
]);

