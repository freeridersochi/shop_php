<main>
    <!-- First parth -->
    <section class="adminItems">
        <h1>Товары</h1>
        <table class="all_group_admin">
            <tr class="tr_title">
                <th>Название категории</th>
                <th colspan="2">Количество товаров</th>
            </tr>
            <tr>
                <td class="left_column"><img class="cat_icon">Название категории 1</td>
                <td class="middle_column">194</td>
                <td class="right_column">
                    <a href="#" class="color_red">удалить</a>
                    <a class="about_item_link" href="#">просмотр</a>
                </td>
            </tr>
            <tr>
                <td class="left_column"><img class="cat_icon">Название категории 1</td>
                <td class="middle_column">194</td>
                <td class="right_column">
                    <a href="#" class="color_red">удалить</a>
                    <a class="about_item_link" href="#">просмотр</a>
                </td>
            </tr>
            <tr>
                <td class="left_column"><img class="cat_icon">Название категории 1</td>
                <td class="middle_column">194</td>
                <td class="right_column">
                    <a href="#" class="color_red">удалить</a>
                    <a class="about_item_link" href="#">просмотр</a>
                </td>
            </tr>
        </table>
        <div class="category_control_bar">
            <label for="new_cat_name">Добавить категорию: &nbsp;</label>
            <input class="new_cat_name" placeholder="название категории">
            <button class="add_cat">добавить категорию</button>
        </div>
    </section>
    <!-- Second parth -->
    <section class="inside_category_admin">
        <h1>Товары</h1>
        <header>
            <label for="chosed_cat_name">Текущая категория:</label>&nbsp;
            <input class="chosed_cat_name" placeholder="Название категории 1">&nbsp;
            <button class="change_cat_name">переименовать</button>
        </header>
        <h2 class="tr_title">
            <span>Название товара</span>
            <span>Стоимость</span>
        </h2>
        <table class="inside_cat_table">
            <tr>
                <td class="left_column">Название товара 1</td>
                <td class="middle_column"> 4 953 <b>руб.</b></td>
                <td class="right_column"><a class="item_info_link" href="#">просмотр</a></td>
            </tr>
            <tr>
                <td class="left_column">Название товара 1</td>
                <td class="middle_column"> 4 953 <b>руб.</b></td>
                <td class="right_column"><a class="item_info_link" href="#">просмотр</a></td>
            </tr>
            <tr>
                <td class="left_column">Название товара 1</td>
                <td class="middle_column"> 4 953 <b>руб.</b></td>
                <td class="right_column"><a class="item_info_link" href="#">просмотр</a></td>
            </tr>
        </table>
        <button class="back_to_adminItems left">Назад</button>
    </section>
    <!-- Third parth -->
    <section class="create_items_admin">
        <h1>Просмотр товара</h1>
        <div class="iten_desc_admin">
            <h2>Информация о товаре</h2>
            <div class="left_bar">
                <label for="new_item_name">Название товара:</label><br>
                <input class="new_item_name" placeholder="Название товара 1"><br>
                <label for="new_item_desc">Описание товара:</label><br>
                <textarea class="new_item_desc">Текст оптсания товара</textarea>
            </div>
            <div class="right_bar">
                <p>Бейджик</p>
                <label class="container">Отсутсвует
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                    <label class="container">NEW
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">HOT
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">SALE
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="item_foto_admin">
             <h2>Фотографии товара</h2>
             <div class="first_img loaded">
                 <img class="item_first_img">
                 <p>не загружено</p>
                 <a href="#" class="load_first_img purple">Загрузить</a>
                 <a href="#" class="change_first_img green">Изменить</a>
                 <a href="#" class="del_first_img red">Удалить</a>
             </div>
             <div class="second_img unladed">
                 <img class="item_second_img">
                 <p>не загружено</p>
                 <a href="#" class="load_second_img purple">Загрузить</a>
                 <a href="#" class="change_first_img green">Изменить</a>
                 <a href="#" class="del_second_img red">Удалить</a>
             </div>
             <div class="third_img unloaded">
                 <img class="item_third_img">
                 <p>не загружено</p>
                 <a href="#" class="load_third_img purple">Загрузить</a>
                 <a href="#" class="change_first_img green">Загрузить</a>
                 <a href="#" class="del_second_img red">Удалить</a>
             </div>
             <div class="fourth_img unloaded">
                 <img class="item_fourth_img">
                 <p>не загружено</p>
                 <a href="#" class="load_fourth_img purple">Загрузить</a>
                 <a href="#" class="change_fourth_img green">Загрузить</a>
                 <a href="#" class="del_second_img red">Удалить</a>
             </div>
        </div>
        <div class="create_item_property">
            <h2>Вариации товара</h2>
            <input class="first_property" placeholder="Вариация 1">
                <label for="first_property"><a href="#">Удалить</a></label>
            <input class="second_property" placeholder="Вариация 2">
                <label for="second_property"><a href="#">Удалить</a></label>
            <input class="third_property" placeholder="Вариация 3">
                <label for="third_property"><a href="#">Удалить</a></label>
        </div>
        <div class="control_main_adm">
            <button class="destroy_item left"><a>Удалить товар</a></button>
            <button class="save_change right"><a>Сохранить изменения</a></button>
            <button class="back_to_inside_category left">Назад</button>
        </div>
    </section>
</main>