<?php
  
function get_promo($promo_mark){
     
    global $link;

    $sql = "SELECT * FROM `promo` WHERE promo_mark='$promo_mark'"; 

    $result = mysqli_query( $link, $sql ); 

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $data[0];
    
};
