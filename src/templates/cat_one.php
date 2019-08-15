
    <h1><?=$item['item_cat']?></h1>
    <a class="back_to_cat1" href="pages/product.php?item_id=<?=$item['id']?>">Вернуться в каталог</a>  
<!--   верхняя навигация начало    -->
    <div class="cat_nav">
        <span>
        <p>Страницы</p>
        <?php for($i=1; $i <= $cat_page['total']; $i++): ?>     
            <a href="cat_one.php?page=<?=$i ?>" class="<?=$cat_page['current'] === $i?'active': ''?>"><?=$i ?></a>
        <?php endfor; ?> 
        </span>
    </div>  
<!--    секция товаров первой категории   -->
<section class="category_items">
    <!--  Баннер1  -->
    <div class="cat1_banner_one">
        <img src="../img/banners/cat1_banner1.png" alt="One">
        <p><strong><?= $category['name'] ?></strong></p>     
        <p class="cat1_desc">Краткий текст о категории</p>
    </div>
<!--     Товары    -->
    <?php foreach($cat_page['data'] as $item):?>
    <article class="new_item">
        <a href="/pages/product2.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
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
    <!--  Баннер2  -->
    <article class="cat1_banner_two">
        <img src="../img/banners/cat1_banner2.png" alt="Two">
        <p class="banner2_item">заголовок<br>промо-товара</p>
        <p class="banner2_desc">Описание промо-товара</p>
        <p class="baner2_price">4 540<b>руб.</b></p>
        <button class="banner2_item_viev">Посмотреть&nbsp;&nbsp;+</button>
    </article>
    <!--   нижняя навигация начало    -->
    <div class="cat_nav">
        <span>
            <p>Страницы</p>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </span>
    </div>
    <!--   нижняя навигация конец    -->
</section>