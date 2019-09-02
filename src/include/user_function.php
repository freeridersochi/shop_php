<?php
//connect to db
require_once 'database.php';

function register($name, $email, $password){
    # save user to data base ("Dobby is free!");
};
function updateData($city, $phone, $street, $home, $appartment){
    # save in bd
};
function login($user_email, $user_password){
       
    global $link;

    $sql = "SELECT * FROM users WHERE email='$user_email'"; 

    $result = mysqli_query( $link, $sql ); 
    
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    $user = $data[0];
    
    if(!$user){
        return null;   
    };
    
    $password_hash = hash('sha256',$user_email.$user_password);
    
    if($password_hash !== $user['password']){
        return null; 
    };
    
    return $user; 
    
};
function save_data($name, $phone, $email){
    #save data
};