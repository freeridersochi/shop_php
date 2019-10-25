<?php
require_once './src/include/common.php';//link session
require_once './src/include/nav_functions.php';// link nav 
require_once './src/include/include.php'; //link include functions
require_once './src/include/checkout_functions.php';

$errors=[];
//first check
if($_SERVER['REQUEST_METHOD']==="POST" && $_POST["get_contacts"]){    
    if(sizeof($errors) === 0){ 
        
        // TO DO CHECK errrors
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $_SESSION['new_customer'] = [
                                 'name'=>$name,
                                 'phone'=>$phone,
                                 'email'=>$email
                                ];
        }
}
//second check
if($_SERVER['REQUEST_METHOD']==="POST" && $_POST["user_address"]){
    if(sizeof($errors) === 0){
        $_SESSION['address'] = [
                                 'city'=>$city,
                                 'street'=>$street, 
                                 'home'=>$home,
                                 'appartment'=>$appartment
                                ];
        }
};

//final check
if($_SERVER['REQUEST_METHOD']==="POST" && $_POST['finish']){
  $user = get_my_current_user() ?? $_SESSION['new_customer'];
  $address = $_SESSION['address'];
  $order = $_SESSION['orders'] ?? 1;
  
    if ($user && $address && $order) {

    $result = checkout($user, $address, $order);
    if($result['error']){
        $data = ['err_message'=>$result['error']];  
        $checkout_error = include_template('src/templates/checkout_error.php', $data);
        render_page([
              'title' => 'Оформление заказа',
              'content' => $checkout_error,
              'styles' => ['checkout_final.css']
        ]);
        die();      
    }else{
        $order_id = $result['order'];
        header("Location: checkout_final.php?order=$order_id");
        $_SESSION['new_customer'] = null;
        $_SESSION['address'] = null;
        $_SESSION['orders'] = null;
        die();
      }
  };
};

$step = 0;
if($_SESSION['new_customer']||get_my_current_user()){
    $step = 1;
    if($_SESSION['address']){
        $step = 2;
    }
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
                                                'title' => 'Оформление заказа',
                                                'content' => $checkout_page,
                                                'styles' => ['checkout.css'],
                                                'scripts' => ['сheckout.js']
                                                ]);
//Show final template with include template
print($include_result);
