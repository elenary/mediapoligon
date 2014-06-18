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

   <h2 style="margin-left: 10%"> Пишем новость </h2>

    <table class="table table-striped">

    <tbody>
    <tr >
        <td >
            <div style="margin-left: 20%;"> Проект </div>
        </td>
        <td>
                <span style="margin-left: -20%;">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        Выбрать проект
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>Русский язык-24</li>
                        <li>Пермь-24</li>
                        <li>Минск-24</li>
                        <li>Уфа-24</li>
                    </ul>
                </div>

        </td>
    </tr>
    <tr>
        <td>
            <div style="margin-left: 20%;"> Страна</div>
        </td>
        <td>
            <div style="margin-left: -20%;">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        Выбрать страну
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>Россия</li>
                        <li>Украина</li>
                        <li>Беларусь</li>
                    </ul>
                </div>
        </td>
    </tr>
    <tr >
        <td style="vertical-align: middle">
            <div style="margin-left: 20%; vertical-align: middle">Город </div>
        </td>
        <td >
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text" name="city" placeholder="Москва" style="width: 20%;"/>
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;">Место </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text" name="place" placeholder="Кинотеатр 'Рассвет'"/>
                </form>
            </div>
        </td>
    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Адрес </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="address"  placeholder="ул. Академическая, д. 56"/>
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Время  </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="time" placeholder="13:12" style="width: 5%"/>
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Заголовок  </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="title" placeholder="Заголовок новости" style="width: 90%"/>
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Подаголовок  </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="subtitle" placeholder="Подзаголовок новости" style="width: 90%;"/>
                </form>
            </div>
        </td>

    </tr>

    <td style="vertical-align: middle">
        <div style="margin-left: 20%;"> Текст  </div>
    </td>
    <td>
        <div style="margin-left: -20%; margin-bottom: -4%">
            <form method="POST">
                <textarea rows="7"  name="text" placeholder="Заголовок новости" style="width: 90%"> </textarea>
            </form>
        </div>
    </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Автор текста </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="author_text" placeholder="Василий Пупкин"/>
                </form>
            </div>
        </td>
    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Фото </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input class="btn" name="photo" type="button" value="Загрузить фото">
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Видео </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input class="btn" name="video" type="button" value="Загрузить видео">
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Описание </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="caption" placeholder="Иван Васильевич за работой" style="width: 90%"/>
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Автор съемки </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="author_media" placeholder="Иван Нонеймов"/>
                </form>
            </div>
        </td>

    </tr>
    <tr>
        <td style="vertical-align: middle">
            <div style="margin-left: 20%;"> Теги </div>
        </td>
        <td>
            <div style="margin-left: -20%; margin-bottom: -4%">
                <form method="POST">
                    <input type="text"  name="tags" id="autocomplete" placeholder="Тег..."/>
                    <script>
                        $( "#autocomplete" ).autocomplete({
                            source: [
                                <?php //foreach($tags as $tag): ---------------------Тут, короч, должен быть перебор всех тегов для автозаполнения, но он не работает
                                  //echo '"', $tag->getTag_ID, '", ';?>
                            ]
                        });
                    </script>
                </form>
            </div>
        </td>

    </tr>

    </tbody>

    </table>

   <input class="btn" name="preview" type="submit" value="предпросмотр" style="margin-left: 10%; margin-bottom: 3%"/>
   <input class="btn btn-warning" name="send" type="submit" value="Все ок? Отправить новость" style="margin-bottom: 3%"/>
   <input class="btn" name="send" type="submit" value="Сохрнить и не опубликовывать" style="margin-bottom: 3%"/>


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
