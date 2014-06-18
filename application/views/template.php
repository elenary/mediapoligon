<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Медиаполигон</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сайт проекта Медиаполигон-24">
    <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
    <link rel="stylesheet/less" type="text/css" href="/css/topic.less">
    <link rel="stylesheet/less" type="text/css" href="/css/forms.less">
    <script src="/js/less.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.10.4.custom.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class="wrapper">

    <header class="header">
        <?php if (!Auth::instance()->logged_in()): ?>
            <div class="b-toppanel" >
                <div class="b-toppanel__linkleft">
                <a href="http://rusrep.ru"> "Русский репортер"</a>
                </div>
                <div class="b-toppanel__linkright">
                <a href="/authorization" > Вход </a> &nbsp; /
                <a href="/registration"> Регистрация </a>
                </div>
            </div>
        <?php endif; ?>
        
       <?php if (Auth::instance()->logged_in('corresp')): ?>
            <div class="b-toppanel" >
                <div class="b-toppanel__linkleft">
                <a href="http://rusrep.ru"> "Русский репортер"</a>
                </div>
                <div class="b-toppanel__linkright">
                <a href="/corresp/write" > Написать новость  </a> &nbsp;
                <a href="/auth/logout" > Выход </a> &nbsp; /
                </div>
            </div>
        <?php endif; ?>

        <div class="b-logo">
         <!--   <div class="b-logo__text">РУССКИЙ ЯЗЫК</div> -->
        <a href="/index">
            <img src="../../img/logo.png" alt="logo">

        </a>
        </div>

        <nav>
            <a href="/about">О проекте</a>
            <a href="/partners">Партнеры</a>
            <a href="/authors">Авторы</a>
            <a href="/contacts">Контакты</a>
        </nav>

        <div class="b-projects">
            <a href="http://24.rusrep.ru/dossier/pub_point/russkij-yazyik-24/">Русский язык-24</a>
            <a href="http://24.rusrep.ru/dossier/pub_point/perm-24/">Пермь-24</a>
            <a href="http://24.rusrep.ru/dossier/pub_point/minsk-24/">Минск-24</a>
            <a href="index">Уфа-24</a>
            <a href="index">Нано-24</a>
            <a href="http://24.rusrep.ru/dossier/pub_point/ekaterinburg-24/">Екатеринбург-24</a>
            <a href="http://24.rusrep.ru/dossier/pub_point/kazan-24/">Казань-24</a>
            <a href="http://24.rusrep.ru/dossier/pub_point/novosib24/">Новосибирск-24</a>
        </div>



    </header>

    <?
    //    include("php/view/newstop_hor.php");
    ?>

    <div class="b-times">

    </div>





    <?php echo $content; ?>






    <footer class="footer">
        <a href="http://rusrep.ru"> Русский репортер</a>
        <a href="http://expert.ru"> Эксперт Online </a>
        <p> &copy; 2014 Медиаполигон-24</p>

    </footer>

</div>


</body>
</html>