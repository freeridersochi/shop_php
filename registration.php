<?php
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include/user_functions.php';

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
    }else if($confirm_password !== $password ){
        $errors['confirm_psw']='Password is not equal';
    }
    if( sizeof($errors)===0 ){

        $user = register($name, $email, $password);
        if(!$user){
            $errors['email']="Sorry, this email is bisy.";
        }else{
            set_my_current_user($user);
            header('Location: home.php');
            die();
        }
    }
};

$registration_data = [
    'errors' => $errors,
    'fields' => $_POST
];

$registration_page = include_template('src/templates/registration.php', $registration_data);

render_page([
              'title' => 'Регистрация',  
              'content' => $registration_page,
              'styles' => ['registration.css'],
              'scripts' => []
]);
