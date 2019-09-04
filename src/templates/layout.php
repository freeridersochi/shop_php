<?php 
    require_once 'src/include/common.php';
    $categories = get_categories();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?=$title?></title>
    <link href="../../css/resetCss.css" rel="stylesheet">
    <link href="../../css/mainCssWebDesignTwo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
               
    <?php foreach($styles as $style) : ?>   
    <link href="../../css/<?=$style ?>" rel="stylesheet">
    <?php endforeach;?>
    
    <?php foreach($scripts as $script) : ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <?php endforeach;?>
          
</head>
<body>
<!--  Заголовок и  основное меню  -->
<header> 
    <div id="shop_logo">
        <a href="home.php">
            <p class="super">SUPER</p>
            <p class="shop">SHOP</p>
        </a>
    </div>
    <div class="menu_bg">
        <ul class="mainNav">
            <?php foreach($categories as $category) : ?>
                <li><a href="/category.php?name=<?=$category['alias']?>&id=<?=$category['id']?>"><?=$category['name']?></a></li>
            <?php endforeach;?>    
        </ul>
    <hr>
    </div>
    <div class="reg_bar">
        <img class="user_enter" src="../img/icons/icon_user_login.png" alt="User Icon">
        <?php if(!get_my_current_user()) :?>
            <a href="login.php" class="red">Войти</a>
            <a href="registration.php" class="reg">Регистрация</a>
        <?php else :?>
            <a href="logout.php" class="red">Выйти</a>
        <?php endif; ?>
    </div>
    <a class="backet" href="backet.php">
        <img src="../img/icons/backet_icon.png" alt="Backet Icon">
        <div class="backet_value">
            <p class="backet_sum">46 945</p>
            <p class="type_money">руб.</p>
        </div>
        <div class="backet_item_value">
            <p class="item_quanity"></p>
            <p>&nbsp;предмета</p>
        </div>
    </a>
</header>

<?=$content ?>

<!-- Footer -->
<footer>
    <p>
    Шаблон для экзаменационного задания.<br>
    Разработан специально для «Всероссийской Школы Программирования»<br>
    http://bedev.ru/
    </p>
    <span><a href="#">Наверх<img src="../img/icons/arrow_%20up.png" alt="Up"></a></span>
</footer>
</body>
</html>