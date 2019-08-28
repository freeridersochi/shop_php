
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
<section class="new_items" id="new_items"><!--    Панель новых товаров   -->
    <span>
        <p class="new_item_title">Новые товары</p>
        <?php if ($new_page['current']<$new_page['total']): ?>
        <a href="home.php?new_prod_page=<?=$new_page['current']+1?>#new_items">
            <img class="arrow_right next" src="../img/icons/arrow_right.png" alt="move in right">
        </a>
        <?php endif ?> 
        <?php if ($new_page['current']>1):?>
        <a href="home.php?new_prod_page=<?=$new_page['current']-1?>#new_items">
            <img class="arrow_left prev" src="../img/icons/arrow_left.png" alt="move in left">
        </a>
        <?php endif ?> 
    </span>
    <?php foreach($new_page['data'] as $item):?>
    <article class="new_item">
        <a href="product.php?item_id=<?=$item['id']?>">
            <div class="img_conteiner">
                <img src="<?=$item['main_photo']?>" alt="Изображение отсутствует">
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
        <img src="./img/banners/banner_one.png" alt="One">
        <p><strong>заголовок</strong><br>промо-товара</p>
    </div>
    <div class="banner_two">
        <img src="./img/banners/banner_two.png" alt="Two">
        <p>
            <strong>заголовок</strong><br>промо-товара
        </p>
    </div>
    <div class="banner_three">
        <img src="./img/banners/banner_three.png" alt="Three">
        <p>
            <strong>заголовок</strong><br>промо-товара
        </p>
    </div>
</section>
<section class="best_salers" id="best_items">    
    <span>
        <p class="best_item_title">Популярные товары</p>
        <?php if ($pop_page['current']<$pop_page['total']): ?>
            <a href="home.php?pop_prod_page=<?=$pop_page['current']+1?>#best_items">
                <img class="arrow_right next_two" src="../img/icons/arrow_right.png" alt="move in right">
            </a>
        <?php endif ?>
        <?php if ($pop_page['current']>1):?>
            <a href="home.php?pop_prod_page=<?=$pop_page['current']-1?>#best_items">
                <img class="arrow_left prev_two" src="../img/icons/arrow_left.png" alt="move in left">
            </a>
        <?php endif ?> 
    </span>
        <?php foreach($pop_page['data'] as $item):?>
        <article class="best_items">
            <a href="product.php?item_id=<?=$item['id']?>">
                <div class="img_conteiner">
                    <img src="<?=$item['main_photo']?>" alt="Изображение отсутствует">
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
