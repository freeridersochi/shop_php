
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

<?=$content ?>

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