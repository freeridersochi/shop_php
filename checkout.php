<?php 
require_once './src/include/common.php';
require_once './src/include/nav_functions.php';// link nav functions
require_once './src/include/include.php'; //link include function
require_once './src/include/user_function.php';
require_once './src/include/checkout_function.php';

$title = "Super Shop";
$errors=[];
//first check
if($_SERVER['REQUEST_METHOD']==="POST"){
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    if( $name === ''){
        if(!preg_match("/[A-z0-9]/i", $name)){
            $errors['name'] = "Not valid name";
            }
        $errors['name'] = "Enter name";
        }
    if ( $phone != ''){
        if(!preg_match("/^((8|\+7)\s?)(\(?\d{3}\)?\s?)\d{3}\s?\d{2}\s?\d{2}$/", $phone)){
            $errors['phone'] = "Not valid phone";
            }
        }
    if ( $email === ''){
        $errors['email'] = "Enter email";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Wrong email";
        }
    if(sizeof($errors) === 0){
        $_SESSION['new_user'] = [
                                 'name'=>$name, 
                                 'phone'=>$phone, 
                                 'email'=>$email
                                ];
        }
}
//second check 
if($_SERVER['REQUEST_METHOD']==="POST"){
    $city=$_POST['city'];
    if( $city === '' ){
        $errors['city'] = "Enter city";
    }
    $city=$_POST['street'];
    if( $city === '' ){
        $errors['street'] = "Enter street";
    }
    if(sizeof($errors) === 0){
        $_SESSION['address'] = [
                                 'city'=>$city,
                                 'street'=>$street 
                                ];       
        }
};

//final check
if($_SERVER['REQUEST_METHOD']==="POST"){
    
    if($_POST['finish']){
        $user = get_my_current_user() ?? $_SESSION['new_user'];
        $address = $_SESSION['address'];
        $order = $_SESSION['order'] ?? 1;
        if ($user && $address && $order) {
        
            $order_number = checkout($user, $address, $order);
            
            $checkout_final_page = include_template('./src/templates/checkout_final.php', ['order_number' => $order_number] );

            $include_result = include_template('./src/templates/layout.php', [                                           
                                                'content' => $checkout_final_page,
                                                'styles' => ['checkout_final.css'],
                                                'scripts' => []
                                                ]);
            //Show final template with include template
            print($include_result);
            $_SESSION['new_user'] = null;
            $_SESSION['address'] = null;
            $_SESSION['order'] = null;
            die();
        }
    };
};

$step = 0;
if($_SESSION['new_user']||get_my_current_user()){
    $step = 1;
    if($_SESSION['address']){
        $step = 2;
    };
}

//data for temlpate
$checkout_data = [
    'errors' => $errors,
    'fields' => $_POST,
    'step' => $step
];

// Use variable $home_data in Include function
$checkout_page = include_template('./src/templates/checkout.php', $checkout_data );

// Include template with data from $categories and data from $home_data in temlate "layout.php"
$include_result = include_template('./src/templates/layout.php', [
                                                'title' => $title,
                                                'content' => $checkout_page,
                                                'styles' => ['checkout.css'],
                                                'scripts' => ['backet.js','сheckout.js']
                                                ]);
//Show final template with include template
print($include_result);
