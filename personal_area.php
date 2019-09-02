<?php 
require_once 'src/include/common.php';
require_once 'src/include/nav_functions.php';
require_once 'src/include/include.php';
require_once 'src/include//user_function.php';
var_dump(get_my_current_user());
$categories = get_categories();

if($_SERVER['REQUEST_METHOD']==="POST"){
$errors=[];
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$street =$_POST['street'];
$home = $_POST['home'];
$appartment = $_POST['appartment'];
    if($name===''){
        $errors['name']="Enter name";
    }
    if($phone===''){
        $errors['phone']="Enter phone";
    }
    if($city===''){
        $errors['city']="Enter city";
    }
    if($street===''){
        $errors['street']="Enter street";
    }
    if($home===''){
        $errors['home']="Enter home";
    }
    if($appartment===''){
        $errors['appartment']="Enter appartment";
    }
    if( sizeof($errors)===0 ){
        updateData($city, $phone, $street, $home, $appartment);
        header('Location: home.php');
    }
    if( sizeof($errors)===0 ){
        register($name, $email, $password);
        #Отправляем в нужное место
        header('Location: home.php');
    }
}

$user_data = [
    'errors' => $errors,
    'fields' => $_POST
];

$pers_area_page = include_template('src/templates/personal_area.php', $user_data);

render_page([ 'categories' => $categories, 
              'content' => $pers_area_page,
              'styles' => ['personalArea.css'],
              'scripts' => []
]);

