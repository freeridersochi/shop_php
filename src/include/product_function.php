<?php 
//foto
function get_photos($product){
    $photos = [$product['main_photo']];
   
    if ($product['photo1']){
        $photos[]=$product['photo1'];
    }
    if ($product['photo2']){
        $photos[]=$product['photo2'];
    }
    if ($product['photo3']){
        $photos[]=$product['photo3'];
    }
    return $photos;
}
// id
function get_product($id){
    
    $id = intval($id);
     
    global $link;

    $sql = "SELECT * FROM `products` WHERE id=".$id; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $data[0];
    
};
//sizes
function get_sizes($id){
    
    $id = intval($id);
     
    global $link;

    $sql = "SELECT * FROM `sizes` WHERE product_id=".$id; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $data;
}
