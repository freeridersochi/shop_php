<?php
//connect to db
require_once 'database.php';

function register($name, $email, $password){
    # save user to data base ("Dobby is free!");
        
    global $link;
    
    $statement = mysqli_prepare($link,"INSERT INTO users (name, email, password )
                            VALUES(?,?,?)");
    # sss ( s-string*3)
    mysqli_stmt_bind_param( $statement, 'sss', $name,$email,$password );
    
    $result = mysqli_stmt_execute($statement);
    
    if(!$result){
        $error = mysqli_error($link);
        return null;
    };

    $id = mysqli_stmt_insert_id($statement);
        
    $result = mysqli_query( $link, "SELECT * FROM users WHERE id=$id" ); 
    
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $data[0];
    
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
