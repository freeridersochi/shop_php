<div class="cat_nav">
    <span>
    <p>Страницы</p>
    <?php for($i=1; $i<= $cat_page['total']; $i++): ?>     
        <a href="category.php?page=<?=$i?>&name=<?=$category['alias']?>" 
            class="<?=$cat_page['current']===$i?'active': ''?>"><?=$i?></a>  
    <?php endfor; ?> 
    </span>
</div> 