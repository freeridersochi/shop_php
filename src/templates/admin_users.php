<main>
<!--  First parth  -->
    <section class="admin_users_bar">
        <h1>Пользователи</h1>
        <h2 class="tr_title">
            <span class="name_column">Имя</span>
            <span class="mail_column">E-mail</span>
            <span class="phone_column">Телефон</span>
        </h2>
        <table class="adm_users_table">
            <tr class="users_row active"> 
                <td class="name_column">Иван Иванов</td>
                <td class="mail_column">mail@company.ru</td>
                <td class="phone_column">+7 926 000-00-00</td>
                <td class="link_column"><a  class="user_viev_link" href="#">просмотр</a></td>
            </tr>
            <tr class="users_row"> 
                <td class="name_column">Иван Иванов</td>
                <td class="mail_column">mail@company.ru</td>
                <td class="phone_column">+7 926 000-00-00</td>
                <td class="link_column"><a class="user_viev_link" href="#">просмотр</a></td>
            </tr>
            <tr class="users_row"> 
                <td class="name_column">Иван Иванов</td>
                <td class="mail_column">mail@company.ru</td>
                <td class="phone_column">+7 926 000-00-00</td>
                <td class="link_column"><a class="user_viev_link" href="#">просмотр</a></td>
            </tr>
        </table>
    </section>
<!--  Second parth  -->
    <section class="admin_users_control">
        <h1>Просмотр пользователя</h1>
<!--   User data     -->
    <form class="user_data">    
        <h2>информация о пользователе</h2>
        <div class="left_bar">
            <label for="client_name" class="user_data_lebels">Контактное лицо (ФИО):</label>
            <input type="text" class="client_name" >
            <label for="client_phone" class="user_data_lebels">Контактный телефон:</label>
            <input type="text" class="client_phone">
            <label for="client_mail" class="user_data_lebels">E-mail:</label>
            <input type="mail" class="client_mail">
        </div>
        <!--  User adress bar   -->
        <div class="right_bar">
            <label for="city" class="user_data_lebels">Город:</label>
            <input class="client_city" type="text">
            <label for="street" class="user_data_lebels">Улица:</label>
            <input class ="client_street" type="text">
            <div class="home_appartments">
                <div class="home_input">
                    <label for="home_num" class="user_data_lebels">Дом:</label>
                    <input class="small_input">
                </div>
                <div class="appartment_input">
                        <label for="appartment_num" class="user_data_lebels">Квартира:</label>
                        <input class="small_input">
                </div>
            </div>
        </div>
    </form>
<!-- User order story  -->
    <h2 class="tr_title">История заказов</h2>
    <table class="orders_story">
        <tr class="orders_story_data"> 
            <td class="order_num light_blue">№8911</td>
            <td class="order_cost">12 500 руб.</td>
            <td class="order_date">01.01.2015 в 16:35</td>
        </tr>
        <tr class="orders_story_data"> 
            <td class="order_num light_blue">№8911</td>
            <td class="order_cost">12 500 руб.</td>
            <td class="order_date">01.01.2015 в 16:35</td>
        </tr>
        <tr class="orders_story_data"> 
            <td class="order_num light_blue">№8911</td>
            <td class="order_cost">12 500 руб.</td>
            <td class="order_date">01.01.2015 в 16:35</td>
        </tr>
    </table>
    <div class="total_sum"> 
        <span class="all_orders_total"><p>29 970<b>руб.</b></p></span>
        <span class="light_blue"><p>Итоговая<br>сумма заказов</p></span>
    </div>
    <button class="destroy_user_btn">Удалить пользователя</button>
    <button class="back_toUser_btn left">Назад</button>
    </section>
</main>