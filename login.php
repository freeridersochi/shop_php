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
    $return = $_POST['returnto'];
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
    if($return){
        $_SESSION['returnto'] = $return;
    }
    if( sizeof($errors)===0 ){
        $user = login($email, $password);
        if(!$user){
            $errors['password']="Invalid credentials";
        }else{
            set_my_current_user($user);
            $return = $_SESSION['returnto'];
            if($return){
                $_SESSION['returnto'] = null;
                header("Location: $return");
            }else{
                header('Location: personal_area.php');
            }
            die();
        };      
    }
};

$title = get_title($start_cut=0,$end_cut=-4);

$login_data = [
    'errors' => $errors,
    'fields' => $_POST
];

$login_page = include_template('src/templates/login.php', $login_data);

render_page([  
              'title' => $title,  
              'content' => $login_page,
              'styles' => ['../css/login.css'],
              'scripts' => []
]);
