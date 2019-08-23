
    <h1><?=$category['name']?></h1>
    <p class="pag_count">Показано из  товаров</p>  
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
        <p><strong><?= $category['name']?></strong></p>     
        <p class="cat1_desc"><?=$category['description']?></p>
    </div>
<!--     Товары    -->
    <?php foreach($cat_page['data'] as $item):?>
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
    <!--  Баннер2  -->
    <article class="cat1_banner_two">
            <img src="../img/banners/cat1_banner2.png" alt="Two">
            <p class="banner2_item"><?=$promo['name']?></p>
            <p class="banner2_desc"><?=$promo['description']?></p>
            <p class="baner2_price"><b><?=$promo['price']?> &#x20bd;</b></p>
            <button class="banner2_item_viev">
                <a href="product.php?item_id=<?=$promo['id']?>">Посмотреть&nbsp;&nbsp;+</a>
            </button>
    </article>
    <!--   нижняя навигация начало    -->
    <div class="cat_nav">
        <span>
            <p>Страницы</p>
            <?php for($i=1; $i <= $cat_page['total']; $i++): ?>     
                <a href="cat_one.php?page=<?=$i ?>" class="<?=$cat_page['current'] === $i?'active': ''?>"><?=$i ?></a>
            <?php endfor; ?> 
        </span>
    </div>
    <!--   нижняя навигация конец    -->
</section>