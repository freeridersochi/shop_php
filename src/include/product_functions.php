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
//promo
function get_promo_products($category_id){    
    
    global $link;

    $sql = "SELECT product.id, product.name, main_photo, price, description FROM products product LEFT JOIN marks mark ON product.mark = mark.id WHERE mark.name = 'promo' AND category =".$category_id.";"; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
     
    return $data;
        
};
//remove product function
function remove_products($product_id, $quantity){
    global $link;
    $product = get_product($product_id);
    if($product['quantity']-$quantity < 0){
        return false;
    }
    $statement = mysqli_prepare($link, "UPDATE products SET quantity = quantity-?");
    
    mysqli_stmt_bind_param($statement, 'i', $quantity);
    
    $result = mysqli_stmt_execute($statement);
    
    if(!$result){
        $error = mysqli_error($link);
        return false;
    };
    
    return true;
    
}
