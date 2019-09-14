<h1><?=$category['name']?></h1>
<p class="pag_count">Показано <?=sizeof($cat_page['data'])?> из <?=$cat_page['items_count']?> товаров</p>
<!--   верхняя навигация    --> 
<?=include_template('src/blocks/pagination.php')?>
<!--    секция товаров первой категории   -->
<section class="category_items">
<!--  Баннер1  -->
    <div class="cat1_banner_one">
        <img src="../img/banners/cat1_banner1.png" alt="One">
        <p><strong><?= $category['name']?></strong></p>     
        <p class="cat1_desc"><?=$category['description']?></p>
    </div>
<!--     Товары    -->
    <?php for($i=1; $i <= sizeof($cat_page['data']); $i++):?>
    <?php $item = $cat_page['data'][$i -1]?>
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
<!--  Баннер2  -->
        <?php if($i % 11 === 0 && $promo_products[$cat_page['current']-1]):?>
        <article class="cat1_banner_two">
                <img src="../img/banners/cat1_banner<?=$i -1?>.png" alt="Two">
                <?php $promo = $promo_products[$cat_page['current']-1];?>
                <p class="banner2_item"><?=$promo['name']?></p>
                <p class="banner2_desc"><?=mb_substr($promo['description'], 0, 50, 'UTF-8').'...'?></p>
                <p class="baner2_price"><b><?=$promo['price']?> &#x20bd;</b></p>
                <button class="banner2_item_viev">
                    <a href="product.php?item_id=<?=$promo['id']?>">Посмотреть&nbsp;&nbsp;+</a>
                </button>
        </article>
        <?php endif;?>
    <?php endfor;?>    
<!--   нижняя навигация    -->
<?=include_template('src/blocks/pagination.php')?>
</section>
<script src="../../js/backet.js"></script>