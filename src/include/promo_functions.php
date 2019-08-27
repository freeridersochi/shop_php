<?php
  
function get_promo_products($category_id){    
    
    global $link;

    $sql = "SELECT product.id, product.name, main_photo, price, description FROM products product LEFT JOIN marks mark ON product.mark = mark.id WHERE mark.name = 'promo' AND category =".$category_id.";"; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
     
    return $data;
        
};
