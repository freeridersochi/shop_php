<?php 
    $categories = get_categories();
    $items = get_items($i);
    $cat_prod_page = intval($_GET['page']??0);
    $cat_page = get_page($items, $cat_prod_page, 17);
?> 
<div class="cat_nav">
    <span>
    <p>Страницы</p>
    <?php for($i=1; $i<= $cat_page['total']; $i++): ?>
        <a href="category.php?page=<?=$i?>&name=<?=$_GET['name']?>" 
            class="<?=$cat_page['current']===$i ?'active': ''?>"><?=$i?></a>
    <?php endfor; ?>
    </span>
</div> 