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

function get_size($size_id){
     
    global $link;

    $sql = "SELECT * FROM `sizes` WHERE id=".$size_id; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $data[0];
}

//calc quantity
function get_quantity($id){
    $quantity = 0;
    $sizes = get_sizes($id);
    foreach($sizes as $size){
        $quantity += $size['quantity'];
    }
    return $quantity;
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
    //get orduct array
    $product = get_product($product_id);
    //get product quantity
    $product_quantity = $product['quantity'];
    //know quatity to change db
    $total_quantity = $product_quantity - $quantity;
    if($total_quantity < 0){
        $err_message ="Sorry, this product is end now!";
        return false;
    }
    $statement = mysqli_prepare($link, "UPDATE products SET quantity = ? WHERE id =  ?");
    
    mysqli_stmt_bind_param($statement, 'ii', $total_quantity, $product_id );
    
    $result = mysqli_stmt_execute($statement);
    
    if(!$result){
        $error = mysqli_error($link);
        return false;
    };
    
    return true;
    
}
