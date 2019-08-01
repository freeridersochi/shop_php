<?php 
    require_once '../src/include/database.php';
    require_once '../src/include/nav_functions.php';

    $item_id = $_GET['item_id'];
    $item_cat = $_GET['item_cat'];
    
    $categories = get_categories();
    $product = get_all($item_id); 
    $cat_prod = get_cat_items($item_cat); 

    require_once '../src/include/include.php';

    $product_data = [
        'product' => $product,
        'product_cat' => $cat_prod   
    ];
    
    $product_page = include_template('../src/templates/product_cart.php', $product_data );

    $include_result = include_template('../src/templates/layout.php', [
                                                'categories' => $categories,
                                                'content' => $product_page
                                                ]);
    print($include_result);

?>