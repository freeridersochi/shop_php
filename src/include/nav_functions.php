<?php
//Connect DB
require_once 'database.php';

// GEt cat func 
function get_categories(){
    
    global $link;

    $sql = "SELECT * FROM `categories`"; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $data;
    
}

//Get item func
function get_items(){
    
    global $link;

    $sql = "SELECT * FROM `products`"; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $data;
    
}

//Get best
function get_best(){
    
    global $link;

    $sql = "SELECT * FROM `products` WHERE mark = 'hot'"; 

    $result = mysqli_query( $link, $sql ); 


    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $data;
    
}

//Get product cart

function get_all($item_id){
    
    global $link;

    $sql = "SELECT * FROM `products` WHERE id=".$item_id; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $data;

}

//Get other product from cat

function get_cat_items($item_cat){
    
    global $link;

    $sql = "SELECT * FROM `products` WHERE id<=4";//.$item_cat;

    $result = mysqli_query ( $link, $sql );

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $data;
    
}

//New product pagination & best salers & category pagination

function get_page( $items , $current_page, $item_counter ){
    $new_page=[];
    $items_count = sizeof($items);
    $total_pages = ceil($items_count/$item_counter);
    
    if ($current_page < 1) {
        $current_page = 1;
    }
    if ($current_page > $total_pages) {
        $current_page = $total_pages;
    }
    
    $offset = ($current_page - 1)*$item_counter;
    
    $new_page['data'] = array_slice($items, $offset, $item_counter);
    $new_page['total'] = $total_pages;
    $new_page['current'] = $current_page;
    $new_page['items_count'] = $items_count; 
    
    return $new_page;    
};

//title
$title = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
