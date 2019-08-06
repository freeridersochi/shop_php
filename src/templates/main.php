
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
    <?php foreach($items as $item):?>
    <article class="new_item">
        <a href="/pages/product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
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
    <?php foreach($bests as $item):?>
    <article class="best_items">
        <a href="/pages/product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
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