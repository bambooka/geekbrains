<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">

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
                    <li><a href="item_list.php">Каталог</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </div>
        </header>

        <hr weight="1px" color="#2c2c2c">
        <h5>Главная</h5>

        <!-- WELCOME SECTION -->
        <span id="doc_time">
           Дата и время
       </span>
       <style type="text/css">
       #example .new { opacity: 0; }
       #example .div_opacity {
          transition: opacity .2s ease-in-out;
          opacity: 1;
      }
  </style>

  <div class="welcome_section" style="display: block;">
    <p class="theme_site">Интернет-магазин авторских украшений ручной работы Flowberry</p>
    <h3 class="welcome">Добро пожаловать в творческую мастерскую Flowberry!</h3>
    <div id="example" style="padding:0px 0px 0px 100px; width:350px; display:none;">
    Каждое украшение создано вручную из полимерной глины и станет прекрасным подарком для друзей, близких, любимых и, конечно, для вас самих :)</div>

</div>

<form action="sign_in.php" id='form_sign_in' style="margin: 0 auto; display: none; position: relative; left: 200px; top: -200px;">
    <label for="login">Логин</label><br>
    <input type="text" name="login"><br>
    <label for='password'>Пароль</label><br>
    <input type="text" name="password"><br><br>
    <input type="submit" name="submit_sign_in" value="Войти"><br>
</form>
<br>


<!-- FOOTER -->

<hr weight="1px" color="#2c2c2c">
<footer>
    <copyright>Все права защищены &copy <a href="https://vk.com/flowberry_hm" target="_blank">Flowberry</a></copyright>
</footer>

</div>
<script type="text/javascript">
    function clock() {
        var d = new Date();
        var month_num = d.getMonth()
        var day = d.getDate();
        var hours = d.getHours();
        var minutes = d.getMinutes();
        var seconds = d.getSeconds();

        month=new Array("января", "февраля", "марта", "апреля", "мая", "июня",
            "июля", "августа", "сентября", "октября", "ноября", "декабря");

        if (day <= 9) day = "0" + day;
        if (hours <= 9) hours = "0" + hours;
        if (minutes <= 9) minutes = "0" + minutes;
        if (seconds <= 9) seconds = "0" + seconds;

        date_time = "Сегодня - " + day + " " + month[month_num] + " " + d.getFullYear() +
        " г.&nbsp;&nbsp;&nbsp;Текущее время - "+ hours + ":" + minutes + ":" + seconds;
        if (document.layers) {
         document.layers.doc_time.document.write(date_time);
         document.layers.doc_time.document.close();
     }
     else document.getElementById("doc_time").innerHTML = date_time;
     setTimeout("clock()", 1000);
 }
</script>

<script type="text/javascript">
 clock();
</script>

<script src='js/script.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
       $.fn.animate_Text = function() {
          var string = this.text();
          return this.each(function(){
             var $this = $(this);
             $this.html(string.replace(/./g, '<span class="new">$&</span>'));
             $this.find('span.new').each(function(i, el){
                setTimeout(function(){ $(el).addClass('div_opacity'); }, 20 * i);
            });
         });
      };
      $('#example').show();
      $('#example').animate_Text();
  });
</script>
</body>

</html>
