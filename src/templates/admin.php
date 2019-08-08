<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Shop</title>
    <link href="css/resetCss.css" rel="stylesheet">
    <link href="css/customCss.css" rel="stylesheet">   
    
    <?php foreach($styles as $style) : ?>   
    <link href="css/<?=$style ?>" rel="stylesheet">
    <?php endforeach;?>
    
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
<aside>
    <div class="back_logo"><p>super<p>shop</p></div>
    <nav>
        <ul>
            <li>
                <img class="admin_orders">
                <a href="adminOrdersPage.html" data-target="adminOrdersPage.html">Заказы</a>
            </li>
            <li class="checked">
                <img class="admin_user checked">      
                <a href="adminUsersPage.html" class="checked">Пользователи</a>
            </li>
            <li>
                <img class="admin_item">
                <a href="adminItemsPage.html" data-target="adminItemsPage.html">Товары</a>
            </li>
            <li>
                <img class="admin_category">  
                <a href="#" data-target="admin_category.php">Категории</a>
            </li>
        </ul>
    </nav>
	<div class="admin_exit">
		<p class="admin_mail">lorem@ipsum</p>
		<button>выйти</button>
	</div>
</aside>

<?=$content ?>

<script>
    $(document).ready(function(){
    // aside function
        $('ul li').hover(
            function(){
                $(this).addClass('choosed');
                $(this).children().addClass('choosed');
            },function(){
                $(this).removeClass('choosed');
                $(this).children().removeClass('choosed');
            }
        );
        //table function
        $('tr').click(
            function(){
                $('tr').removeClass('active');
                $(this).addClass('active');
            }
        );
        //user parth
        $('.user_viev_link').click(
            function(event){
                    $('.admin_users_bar').css("display", "none"),
                    $('.admin_users_control').css("display","block");
                }
        );
        $('.back_toUser_btn').click(
            function(){
                    $('.admin_users_control').css("display", "none"),
                    $('.admin_users_bar').css("display","block");
            }
        );
        //order parth
        $('.about_order_link').click(
            function(){
                    $('.custom_info').css("display", "none"),
                    $('.order_deatails').css("display","block");
            }
        );
        $('.back_customInfo_btn').click(
            function(){
                    $('.order_deatails').css("display", "none"),
                    $('.custom_info').css("display","block");
            }
        );
        //item parth
        $('.about_item_link').click(
            function(){
                    $('.adminItems').css("display", "none"),
                    $('.inside_category_admin').css("display","block");
            }
        );
        $('.back_to_adminItems').click(
            function(){
                    $('.inside_category_admin').css("display", "none"),
                    $('.adminItems').css("display","block");
            }
        );
        // item second page 
        $('.item_info_link').click(
            function(){
                    $('.inside_category_admin').css("display", "none"),
                    $('.create_items_admin').css("display","block");
            }
        );
        //item third page
        $('.back_to_inside_category').click(
            function(){
                    $('.create_items_admin').css("display", "none"),
                    $('.inside_category_admin').css("display","block");
            }
        );
    });//end ready
</script>
</body>
</html>