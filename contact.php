<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- MENU -->

        <header>
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div>
                <ul class="menu">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="catalog/catalog_2.php">Каталог</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </div>
        </header>
        <hr weight="1px" color="#2c2c2c">
        <h5>Контакты</h5>
        <!-- ADDRESSES AND PHONES -->

        <p>+7 999 999 99 99</p>
        <address>flowberry@pochta.com</address>
        <p>г. Санкт-Петербург, Невский проспект, д.9/4</p>

        <!-- MAPS -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.9879953012025!2d30.348131451418247!3d59.93234136947998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469631a5e66d51c5%3A0x6f00589ac258db97!2z0J3QtdCy0YHQutC40Lkg0L_RgC4sINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCz!5e0!3m2!1sru!2sru!4v1515771794473" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!-- FEEDBACK -->

        <h2>Есть вопрос? Напишите нам!</h2>
        <form name="feedback" action="#" method="post">
            <input class="input name_form" name="name" type="text" width="15%" placeholder="*Ваше имя" style="margin-bottom: 5px"><br>
            <input class="input email_form" name="email" type="text" width="15%" placeholder="*Электронная почта" style="margin-bottom: 5px"><br>
            <input class="input sub_form" name="sub" type="text" width="15%" placeholder="Тема Вашего сообщения"><br>

            <p>Текст сообщения: <br>
                <textarea name="body" cols="1" rows="5" style="width:30%"></textarea>
            </p>
            <p>
                <input id="submit" value="Отправить" type="submit">
            </p>
        </form>

        <!-- FOOTER -->

        <hr weight="1px" color="#2c2c2c">

        <footer>
            <copyright>Все права защищены &copy <a href="https://vk.com/flowberry_hm" target="_blank">Flowberry</a></copyright>
        </footer>
    </div>
</body>

</html>
