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

    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-responsive.css.css">

    <script src="/js/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
    <script src="/js/less.js" type="text/javascript"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="wrapper">
    <div class="row-fluid">

    <span class="span12">

<div class="b-toppanel" >
    <div class="b-toppanel__linkleft">
        <a href="http://rusrep.ru"> "Русский репортер"</a>
    </div>
    <div class="b-toppanel__linkright">
        <a href="/authorization" > Вход </a> &nbsp; /
        <a href="/registration"> Регистрация </a>
    </div>

</div>

<div class="b-logo">
    <!--   <div class="b-logo__text">РУССКИЙ ЯЗЫК</div> -->
    <a href="/index">
        <img src="../../img/logo.png" alt="logo">
    </a>

</div>

   <h2 style="margin-left: 10%"> Список всех новостей </h2>

    <table class="table table-striped">

        <tbody>
        <tr >
          <td >
                ID
            </td>
            <td >
                Заголовок
            </td>
            <td >
                Автор
            </td>
            <td >
                Время
            </td>
            <td style="white-space: nowrap">
                В топ
            </td>
            <td >
                Формат
            </td>
            <td >
                Фото
            </td>
            <td >
                Видео
            </td>
            <td >
                Корректор
            </td>
            <td >
                Опубликовано
            </td>
        </tr>
        <?php foreach($topics as $topic):?>
        <tr>
            <td>
                <a href="/admin/edit/<?=$topic->getID()?>"> <?=$topic->getID()?> </a>
            </td>
            <td>
                <a href="/admin/edit/<?=$topic->getID()?>"><?=$topic->getTitle()?></a>
            </td>
            <td>
                <?=$topic->getAuthor_text()?>
            </td>
            <td>
                <?=$topic->getTime()?>
            </td>
            <td style="text-align: center">
                <?=$topic->getIn_top()?>
            </td>
            <td>
                <?=$topic->getFormat()?>
            </td>
            <td  style="text-align: center">
                <?=$topic->checkPhoto()?>
            </td>
            <td  style="text-align: center">
                <?=$topic->checkVideo()?>
            </td>
            <td  style="text-align: center">
                <?=$topic->getChecked_by_korr()?>
            </td>
            <td  style="text-align: center">
                <?=$topic->getPublished()?>
            </td>
        </tr>
            <?php  endforeach; ?>
        </tbody>
        </table>






    <footer class="footer">
        <a href="http://rusrep.ru"> Русский репортер</a>
        <a href="http://expert.ru"> Эксперт Online </a>
        <p> &copy; 2014 Медиаполигон-24</p>

    </footer>
    </span>

    </div>

</div>
</body>
</html>
