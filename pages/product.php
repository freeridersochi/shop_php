<?php 

include '../app/include/database.php';
include '../app/include/nav_functions.php';

$item_id = $_GET['item_id'];
$item_cat = $_GET['item_cat'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Shop</title>
    <link href="../css/resetCss.css" rel="stylesheet">
    <link href="../css/mainCssWebDesign.css" rel="stylesheet">
    <link href="../css/product.css" rel="stylesheet">   
</head>
<body>
<header> <!--  Заголовок и  основное меню  -->
    <div id="shop_logo">
        <p class="super">SUPER</p>
        <p class="shop">SHOP</p>
    </div>
    <div class="menu_bg">
    <menu>
        <ul class="mainNav">
            <?php 
                $categories = get_categories();
            ?>
            <?php foreach($categories as $category) : ?>
                <li><a href="/category.php?id=<?=$category['id']?>"><?=$category['title']?></a></li>
            <?php endforeach;?>
        </ul>
    </menu>
    <hr>
    </div>
    <div class="reg_bar">
        <img class="user_enter" src="../img/icons/icon_user_login.png" alt="User Icon">
        <p class="red">Войти</p>
        <p class="reg">Регистрация</p>
    </div>
    <div class="backet">
        <img src="../img/icons/backet_icon.png" alt="Backet Icon">
        <div class="backet_value">
            <p class="backet_sum"></p>
            <p class="type_money"></p>
        </div>
        <div class="backet_item_value">
            <p class="item_quanity"></p>
            <p>&nbsp;</p>
        </div>
    </div>
</header>
<?php 
    $product = get_all($item_id); 
?>
<?php foreach($product as $item):?>
    <h1><?=$item['item_cat']?></h1>
    <a class="back_to_cat1" href="/product.php?item_id=<?=$item['id']?>">Вернуться в каталог</a>  
<!-- Секция товара начало -->
<section class="item_in_cat">
        <!--  left_bar    -->
        <div class="left_bar">  
            <!--    Start Foto div    -->   
            <div class="cat1_item1_pictures"> 
                <img src="<?=$item['item_big_img']?>">
                <img class="zoom" src="../img/icons/zoom_icon.png">
            </div>  <!--    End Foto div    -->  
            <div class="item_slider"> <!--   Start slider    -->
                    <a><img src="../img/icons/product_slider_arrow.png" class="move_left"></a>
                        <div class="prewiew_wrap"><img src="<?=$item['item_small_img1']?>" class="preview"></div>
                        <div class="prewiew_wrap"><img src="<?=$item['item_small_img2']?>" class="preview active"></div>
                        <div class="prewiew_wrap"><img src="<?=$item['item_small_img3']?>" class="preview"></div>
                        <div class="prewiew_wrap"><img src="<?=$item['item_small_img4']?>" class="preview"></div>
                    <a><img src="../img/icons/product_slider_arrow.png" class="move_right"></a>
            </div> 
            <!--   End slider    -->
        </div> 
        <!--  middle_bar    -->
        <div class="middle_bar">
                <p class="cat1_item1_name"><?=$item['item_name']?></p>
                <p class="cat1_item1_about"><?=$item['item_desc']?></p>
                <span>
                    <p>Выберете вариант:</p>
                    <select>
                        <option value="size_38"><?=$item['item_first_size']?></option>
                        <option value="size_37"><?=$item['item_second_size']?></option>
                        <option value="size_36" selected><?=$item['item_third_size']?></option>
                    </select>
                </span>    
        </div> 
        <!--  right_bar    -->
        <div class="right_bar">
             <!--      Bay Bar Section start       -->
             <div class="buy_bar">
                 <p class="item1_old_price"><?=$item['old_price']?></p>
                 <p class="cat1_item1_price"><?=$item['item_price']?></p>
                 <span>
                     <img class="cat1_item1_status_icon" src="../img/icons/instock_icon.png"> 
                     <p class="cat1_item1_status">есть в наличии</p>
                 </span>
                 <hr class="gray_border">
                 <button class="buy_button">
                     <img src="../img/icons/buy_cart_icon.png">
                     <p>купить</p>
                 </button>
             </div>
             <!--      Bay Bar Section End      -->
             <div class="icon_section">
                 <div class="icons_bar">
                     <div class="round_wrapper">
                         <img src="../img/icons/delivery_icon.png" class="delivery_icon">
                     </div>
                     <div class="round_wrapper">
                         <img src="../img/icons/hot_line_icon.png" class="hot_line_icon">
                     </div>
                     <div class="round_wrapper">
                         <img src="../img/icons/presents_icon.png" class="presents_icon">
                     </div>
                 </div>
                 <div class="desc_bar">
                     <p class="stupid_disigner_bold">Бесплатная доставка</p>
                     <p class="stupid_disigner_thin">по всей России</p>
                     <p class="stupid_disigner_bold">Горячая линия</p>
                     <p class="stupid_disigner_thin">8 800 000-00-00</p>
                     <p class="stupid_disigner_bold">Подарки</p>
                     <p class="stupid_disigner_thin">каждому покупателю</p>
                 </div>
             </div>   
        </div> <!--    End right_bar    -->
</section>
<?php endforeach; ?>  
<!-- Best items in cat section -->
<section class="best_salers">
    <span>
        <p class="best_item_title">Другие товары из категории "<?=$item['item_cat']?>"</p>
        <img class="arrow_right" src="../img/icons/arrow_right.png" alt="move in right">
        <img class="arrow_left" src="../img/icons/arrow_left.png" alt="move in left">
    </span>
<?php 
    $cat_prod = get_cat_items($item_cat); 
?>
<?php foreach($cat_prod as $item):?>
    <article class="other_in_cat">
        <a href="/product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
            <div class="item_img_wrap">
                <img src="<?=$item['item_big_img']?>" alt="Изображение отсутствует">
            </div>
            <p class="item_name"><?=$item['item_name']?></p>
            <p class="item_price"><?=$item['item_price']?></p>
        </a>
    </article> 
<?php endforeach; ?>   
</section>
<!--  Footer   -->
<footer>
    <p>
    Шаблон для экзаменационного задания.<br>
    Разработан специально для «Всероссийской Школы Программирования»<br>
    http://bedev.ru/
    </p>
    <span><a href="ProductPage.html">Наверх<img src="../img/icons/arrow_%20up.png" alt="Up"></a></span>
</footer>
</body>
</html>