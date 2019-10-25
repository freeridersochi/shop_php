<?php
require_once './src/include/product_functions.php';
require_once './src/include/busket_functions.php';
require_once './src/include/user_functions.php';

//save product in order 
function checkout($user, $address, $orders) {
    
    global $link;
    mysqli_begin_transaction($link);
    $err_message = null;
    $order_id = -1;
    try {
        //Action hear
        if(!$user['id']){
           $password = rand(100,1000).$user['name']; //Generate random password
           $user = register($user['name'], $user['email'], $password);
            if(!user) {
                $err_message ="User email is not avaialable!";
            }
        }
        if(!$err_message){
            updateData($user['id'], $address);
            $order_id = create_order($user['id'],$orders); 
            if(!$order_id){
                $err_message="Извините, не удалось создать заказ.";
            };
        }
        
    } catch (Exception $e) {
        $err_message = $e->getMessage();
    }
    if($err_message === null) {
        mysqli_commit($link);
    } else {
        mysqli_rollback($link);
        //print $err_message;
        
        
        //TO DO errror message (like 'Такой товар к сожалению кончился.') и остальные условия(кончился размер.) Сообщение об ошибке + номер заказа. 
    }
    return $order_id ;
};

function create_ordered_product($id, $order) {

    global $link;
    $statement = mysqli_prepare($link, "INSERT INTO ordered_products(order_id, quantity, size_id, product_id) VALUES(?,?,?,?)");

    mysqli_stmt_bind_param( $statement, 'iiii',$id , $order['quantity'], $order['size'], $order['product']);

    $result = mysqli_stmt_execute($statement);

    if(!$result){
        $error = mysqli_error($link);
        return null;
    };

    $id = mysqli_stmt_insert_id($statement);
    //update table orders
    
    if(!remove_products($order['product'], $order['quantity'])){
        return null;
    }
    
    return $id;
};

function create_order($owner_id, $orders) {  
    global $link;
    $statement = mysqli_prepare($link, "INSERT INTO orders(owner_id, status) VALUES(?,?)");
    
    $status = 'accepted';
    mysqli_stmt_bind_param($statement, 'is',$owner_id, $status);
    
    $result = mysqli_stmt_execute($statement);
    
    if(!$result){
        $error = mysqli_error($link);
        return null;
    };
    
    $id = mysqli_stmt_insert_id($statement);
    
    foreach($orders as $order){
        if(!create_ordered_product($id, $order)){
            return null;
        };
    }
        
    return $id;
};
