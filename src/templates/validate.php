<?php
$user = [];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST;

    var_dump($user);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validate</title>
</head>
<body>
<form action="validate.php" method="post">
    <h5>Персональные данные</h5>
    <section class="personal">
        <label>Имя:<input type="text" placeholder="Ваше имя" name="name"></label>
        <label>Фамилия:<input type="text" placeholder="Ваша фамилия" name="familyname"></label>
        <button id="personal-next">Дальше</button>
    </section>
    <h5>Адрес</h5>
    <section class="address" style="visibility: hidden;">
        <label>Город:<input type="text" placeholder="Маааасква" name="city"></label>
        <label>Улица:<input type="text" placeholder="Ул Пушкина" name="street"></label>
        <button id="address-next">Дальше</button>
    </section>
    <h5>Заказ</h5>
    <section class="other" style="visibility: hidden;">
        <label>Кол-во:<input type="number" placeholder="12" name="number"></label>
        <button type="submit">Отправить</button>
    </section>
</form>
<script>
    const sections = document.querySelectorAll(`section`);
    const headers = document.querySelectorAll(`h5`);

    document.querySelector(`#personal-next`).addEventListener(`click`, (e) => {
        sections[0].style.visibility = `hidden`;
        sections[1].style.visibility = `visible`;
        e.preventDefault();
    });

    document.querySelector(`#address-next`).addEventListener(`click`, (e) => {
        sections[1].style.visibility = `hidden`;
        sections[2].style.visibility = `visible`;
        e.preventDefault();
    });
</script>
</body>
</html>
