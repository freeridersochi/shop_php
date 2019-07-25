<?php

include '../app/include/database.php';
include '../app/include/nav_functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Shop</title>
    <link href="../css/resetCss.css" rel="stylesheet">
    <link href="../css/mainCssWebDesign.css" rel="stylesheet">
</head>
<body>
<!--  Заголовок и  основное меню  -->
<header> 
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
            <p class="backet_sum">46 945</p>
            <p class="type_money">руб.</p>
        </div>
        <div class="backet_item_value">
            <p class="item_quanity">2</p>
            <p>&nbsp;предмета</p>
        </div>
    </div>
</header>
<!--   Jumbotron   -->
<section class="jumbotron">
    <div >
        <img src="../img/banners/slider_image.png">
        <p class="name_promo_item">
            <strong>Название</strong><br>Промо-товара
        </p>
        <p class="promo_desc">Описание промо-товара</p>
        <span class="background_text">super shop</span>
        <button class="about_promo">Посмотреть &nbsp;+</button>
    </div>
</section>
<!-- Item parth -->
<section class="new_items"><!--    Панель новых товаров   -->
    <span>
        <p class="new_item_title">Новые товары</p>
        <img class="arrow_right" src="../img/icons/arrow_right.png" alt="move in right">
        <img class="arrow_left" src="../img/icons/arrow_left.png" alt="move in left">
    </span>
    <?php 
        $items = get_items(); 
    ?>
    <?php foreach($items as $item):?>
    <article class="new_item">
        <a href="/product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
            <div class="img_conteiner">
                <img src="<?=$item['image']?>" alt="Изображение отсутствует">
            </div>
            <p class="item_name"><?=$item['name']?></p>
            <div class="price_conteiner">
                <p class="item_price"><?=$item['price']?></p>
            </div>
        </a>
    </article>
    <?php endforeach; ?> 
</section>
<section class="banners">
    <div class="banner_one">
        <img src="../img/banners/banner%20_one.png" alt="One">
        <p><strong>заголовок</strong><br>промо-товара</p>
    </div>
    <div class="banner_two">
        <img src="../img/banners/banner%20_two.png" alt="Two">
        <p>
            <strong>заголовок</strong><br>промо-товара
        </p>
    </div>
    <div class="banner_three">
        <img src="../img/banners/banner_three.png" alt="Three">
        <p>
            <strong>заголовок</strong><br>промо-товара
        </p>
    </div>
</section>
<section class="best_salers">
    <span>
        <p class="best_item_title">Популярные товары</p>
        <img class="arrow_right" src="../img/icons/arrow_right.png" alt="move in right">
        <img class="arrow_left" src="../img/icons/arrow_left.png" alt="move in left">
    </span>
    <?php 
        $bests = get_best(); 
    ?>
    <?php foreach($bests as $item):?>
    <article class="best_items">
        <a href="/product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
            <div class="img_conteiner">
                <img src="<?=$item['image']?>" alt="Изображение отсутствует">
            </div>
            <!--    обрезаем имя до нужного количества символов    -->
            <p class="item_name"><?=mb_substr($item['name'], 0, 15, 'UTF-8').'...'?></p>
            <div class="price_conteiner">
                <p class="item_price"><?=$item['price']?></p>
            </div>
        </a>
    </article>
    <?php endforeach; ?> 
</section>
<section class="about_shop">
    <img src="../img/banners/about_shop.png">
    <h1>О магазине</h1>
    <div>
    <p>Этот магазин реализован в рамках дипломной работы. 
       Даже если товары имеют сходство с реальными они являются вымышлеными. Названия и цены тоже. 
       Если вы хотели что-то купить это не получится. Приношу свои извинения! Если сам магазин понравился и есть желание купить шаблон свжитесь со мной через контакты в нижней части сайта. Хорошего дня и приятного просмотра, все работает в "зазеркалье", приятного просмотра!
    </p>
    </div>
</section>
<!-- Footer -->
<footer>
    <p>
    Шаблон для экзаменационного задания.<br>
    Разработан специально для «Всероссийской Школы Программирования»<br>
    http://bedev.ru/
    </p>
    <span><a href="index.php">Наверх<img src="../img/icons/arrow_%20up.png" alt="Up"></a></span>
</footer>
</body>
</html>

