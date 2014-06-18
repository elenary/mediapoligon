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
                    <?php if (isset($data['success']) && $data['success'] == true): ?>
                        <h3>Новость добавлена.</h3>
                    <?php endif;?>
                    <?php if (isset($data['errors']) && is_array($data['errors'])): ?>
                        <?php foreach($data['errors'] as $error): ?>
                            <h4><?=$error ?></h4>
                        <?php endforeach; ?>
                    <?php endif;?>
                    <form method="POST">
                        <table class="table table-striped">

                            <tbody>
                                <tr >
                                    <td >
                                        <div style="margin-left: 20%;"> Проект </div>
                                    </td>
                                    <td>
                                        <span style="margin-left: -20%;">
                                            <div class="btn-group">
                                                <select name="project" id="project">
                                                    <option>Русский язык-24</option>
                                                    <option>Пермь-24</option>
                                                    <option>Минск-24</option>
                                                    <option>Уфа-24</option>
                                                </select>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="margin-left: 20%;"> Страна</div>
                                    </td>
                                    <td>
                                        <div style="margin-left: -20%;">
                                            <div class="btn-group">
                                                <select name="country" id="country">
                                                    <option>Россия</option>
                                                    <option>Украина</option>
                                                    <option>Беларусь</option>
                                                </select>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle">
                                        <div style="margin-left: 20%; vertical-align: middle">Город </div>
                                    </td>
                                    <td >
                                        <div style="margin-left: -20%; margin-bottom: -4%">
                                            <input type="text" name="city" placeholder="Москва" style="width: 20%;"/>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td style="vertical-align: middle">
                                        <div style="margin-left: 20%;">Место </div>
                                    </td>
                                    <td>
                                        <div style="margin-left: -20%; margin-bottom: -4%">
                                            <input type="text" name="place" placeholder="Кинотеатр 'Рассвет'"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle">
                                        <div style="margin-left: 20%;"> Адрес </div>
                                    </td>
                                    <td>
                                        <div style="margin-left: -20%; margin-bottom: -4%">
                                            <input type="text"  name="address"  placeholder="ул. Академическая, д. 56"/>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td style="vertical-align: middle">
                                        <div style="margin-left: 20%;"> Время  </div>
                                    </td>
                                    <td>
                                        <div style="margin-left: -20%; margin-bottom: -4%">
                                            <input type="text"  name="time" placeholder="13:12" style="width: 5%"/>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td style="vertical-align: middle">
                                        <div style="margin-left: 20%;"> Заголовок  </div>
                                    </td>
                                    <td>
                                        <div style="margin-left: -20%; margin-bottom: -4%">
                                            <input type="text"  name="title" placeholder="Заголовок новости" style="width: 90%"/>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td style="vertical-align: middle">
                                        <div style="margin-left: 20%;"> Подаголовок  </div>
                                    </td>
                                    <td>
                                        <div style="margin-left: -20%; margin-bottom: -4%">
                                            <input type="text"  name="subtitle" placeholder="Подзаголовок новости" style="width: 90%;"/>
                                        </div>
                                    </td>

                                </tr>

                            <td style="vertical-align: middle">
                                <div style="margin-left: 20%;"> Текст  </div>
                            </td>
                            <td>
                                <div style="margin-left: -20%; margin-bottom: -4%">
                                    <textarea rows="7"  name="text" placeholder="Текст новости" style="width: 90%"> </textarea>
                                </div>
                            </td>

                            </tr>
                            <tr>
                                <td style="vertical-align: middle">
                                    <div style="margin-left: 20%;"> Автор текста </div>
                                </td>
                                <td>
                                    <div style="margin-left: -20%; margin-bottom: -4%">
                                        <input type="text"  name="author_text" placeholder="Василий Пупкин"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle">
                                    <div style="margin-left: 20%;"> Фото </div>
                                </td>
                                <td>
                                    <div style="margin-left: -20%; margin-bottom: -4%">
                                        <input class="btn" name="photo" type="button" value="Загрузить фото">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td style="vertical-align: middle">
                                    <div style="margin-left: 20%;"> Видео </div>
                                </td>
                                <td>
                                    <div style="margin-left: -20%; margin-bottom: -4%">
                                        <input class="btn" name="video" type="button" value="Загрузить видео">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td style="vertical-align: middle">
                                    <div style="margin-left: 20%;"> Описание </div>
                                </td>
                                <td>
                                    <div style="margin-left: -20%; margin-bottom: -4%">
                                        <input type="text"  name="caption" placeholder="Иван Васильевич за работой" style="width: 90%"/>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td style="vertical-align: middle">
                                    <div style="margin-left: 20%;"> Автор съемки </div>
                                </td>
                                <td>
                                    <div style="margin-left: -20%; margin-bottom: -4%">
                                        <input type="text"  name="author_media" placeholder="Иван Нонеймов"/>
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
                                                $("#autocomplete").autocomplete({
                                                    source: [
<?php
//foreach($tags as $tag):
// echo '"', $tag->getTag(), '", ';
//endforeach; 
?>
                                                    ]
                                                });
                                            </script>
                                        </form>
                                    </div>
                                </td>

                            </tr>

                            </tbody>

                        </table>

                        <input class="btn btn-warning" name="send" type="submit" value="Все ок? Отправить новость" style="margin-left: 37%; margin-bottom: 3%"/>
                    </form>



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
