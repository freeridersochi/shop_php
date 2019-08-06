<?php
//Connect DB
require_once '../src/include/database.php';

// GEt cat func 
function get_categories(){
    
global $link;

$sql = "SELECT * FROM `order category`"; 

$result = mysqli_query( $link, $sql ); 

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
return $data;
    
}

//Get item func
function get_items(){
    
global $link;

$sql = "SELECT * FROM `new items`"; 

$result = mysqli_query( $link, $sql ); 

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
return $data;
    
}

//Get best
function get_best(){
    
global $link;

$sql = "SELECT * FROM `best salers`"; 

$result = mysqli_query( $link, $sql ); 


$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
return $data;
    
}

//Get product cart

function get_all($item_id){
    
global $link;

$sql = "SELECT * FROM `all items` WHERE id=".$item_id; 

$result = mysqli_query( $link, $sql ); 

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
return $data;

}

//Get other product from cat

function get_cat_items($item_cat){
    
global $link;

$sql = "SELECT * FROM `all items` WHERE id<=4";//.$item_cat;

$result = mysqli_query ( $link, $sql );

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $data;
    
}
    
/*function get_prod_db(){

global $link;

$sql = "SELECT * FROM 'all items'";//WHERE id=".$item_id;//."& 'item_cat =".$item_category."; 

var_dump($sql);
var_dump($link);

$result = mysqli_query( $link, $sql );
    
var_dump($result);
    
$data = mysqli_fetch_assoc($result);
    
return $data;    
*/
    


?>
