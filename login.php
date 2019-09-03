<?php 
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include/user_function.php';

$url = $_SERVER['HTTP_REFERER']??'home.php';

if(get_my_current_user()){    
    header('Location: personal_area.php');
    die();
};

$errors=[];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=trim($_POST['email']);
    $password=$_POST['psw'];
    if($email==''){
        $errors['email']="Enter email";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']="Wrong email";
    }
    if($password==''){
        $errors['password']="Enter password";
    }
    if( sizeof($errors)===0 ){
        $user = login($email, $password);
        if(!$user){
            $errors['password']="Invalid credentials";
        }else{
            set_my_current_user($user);
            header('Location: personal_area.php');
            die();
        };      
    }
};

$login_data = [
    'errors' => $errors,
    'fields' => $_POST
];

$login_page = include_template('src/templates/login.php', $login_data);

render_page([  
              'content' => $login_page,
              'styles' => ['../css/login.css'],
              'scripts' => []
]);
