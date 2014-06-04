-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2014 г., 16:56
-- Версия сервера: 5.5.35-log
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mediapoligon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `geos`
--

CREATE TABLE IF NOT EXISTS `geos` (
  `geo_ID` int(255) NOT NULL AUTO_INCREMENT,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`geo_ID`),
  UNIQUE KEY `place` (`place`),
  UNIQUE KEY `address` (`address`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `geos`
--

INSERT INTO `geos` (`geo_ID`, `country`, `city`, `place`, `address`) VALUES
(1, 'Россия', 'Новосибирск', 'Гостиница «Сибирь»', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_ID` int(50) NOT NULL AUTO_INCREMENT,
  `project` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`project_ID`),
  UNIQUE KEY `project` (`project`),
  UNIQUE KEY `date` (`date`),
  UNIQUE KEY `project_ID` (`project_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `project` enum('Русский язык-24','Пермь-24','Минск-24','Нано-24','Уфа-24','Екатеринбург-24','Казань-24','Новосибирск-24') COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `author_text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_media` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `inner_tag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edited_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checked_by_korr` enum('Нет','Да') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Нет',
  `format` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Обычный',
  `in_top` enum('Нет','Да') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Нет',
  `published` enum('Нет','Да') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Нет',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`ID`, `project`, `country`, `city`, `place`, `address`, `time`, `title`, `subtitle`, `text`, `author_text`, `photo`, `video`, `caption`, `author_media`, `tags`, `icon`, `inner_tag`, `edited_by`, `checked_by_korr`, `format`, `in_top`, `published`) VALUES
(1, 'Русский язык-24', 'Россия', 'Северск', NULL, NULL, '17:10', '«Подключиться к Макаревичу я не смог, зато подключился к Хабенскому»', 'Журналист Влад Михайлов: «Подключиться к Макаревичу я не смог, зато подключился к Хабенскому»', '— Подключиться к Макаревичу я не смог, зато подключился к Хабенскому, – рассказывает журналист Влад Михайлов, который писал диктант онлайн. \r\n– Хабенский прекрасен. Диктовал без явных подсказок, но красиво. Но связь все равно была настолько плохая, что я пропустил по предложению в каждом абзаце. Теперь жду, когда выложат диктант в записи. Надо дописать это дело, хотя бы для прикола. Я все по-честному пишу, без интернета.', 'Светлана Соколова', '../../images/1.jpg', NULL, 'Подпись под фото, у которой есть какой-то профессиональный термин, который я не могу вспомнить.', 'Алена Кардаш', 'Грамотность, русский язык', '', 'Хабенский', NULL, 'Нет', 'Обычный', 'Да', 'Нет'),
(2, 'Русский язык-24', 'Россия', 'Москва', 'Ресторан "Шале"', NULL, '16:15', 'Слово «уматный» приехало из Барнаула', 'Слово "уматный" приехало из Барнаула', 'Десятиклассница Ксюша задумалась над вопросом:\r\n\r\n— Хм... Самое любимое слово в русском языке... Какое бы уматное слово придумать, даже не знаю...\r\n\r\nТут и попалась с неизвестным в Москве словечком, которое друг Ксюши привёз из Барнаула. «Уматный» - значит классный, крутой.', 'Валерия Бараева', '../../images/2.jpg', NULL, NULL, NULL, 'Русский язык, Слова', '', NULL, NULL, 'Нет', 'Обычный', 'Да', 'Нет'),
(3, 'Русский язык-24', 'Россия', 'Владимир', 'Владимирский филиал Финансового университета при Правительстве РФ', NULL, '19:50', 'Первая «пятерка» во Владимире', 'Более трех часов понадобилось проверяющим, чтобы найти работу на «пять»', 'Более трех часов понадобилось проверяющим, чтобы найти работу на «пять»:\r\n\r\n– Нет орфографических ошибок, только одна несерьезная пунктуационная, ну, наконец-то, – с теплотой говорит девушка-филолог, которой достался на проверку «отличный» диктант. В аудитории прозвучали сдержанные возгласы одобрения.', 'Степан Лаврушин', '../../images/otlichno.jpg', NULL, NULL, NULL, 'Русский язык, Грамотность', '', NULL, NULL, 'Нет', 'Обычный', 'Да', 'Нет'),
(4, 'Русский язык-24', 'Россия', 'Новосибирск', 'Гостиница "Азимут-Сибирь"', 'Ленина 21', '01:00', 'Алексей Иванов: «Диктант – акция большого гражданского звучания»', 'Чем для писателя стал Тотальный диктант, если говорить о чём-то большем, нежели о написании текста под диктовку.', 'Писатель Алексей Иванов и продюсер Юлия Зайцева идут по дороге к гостинице.\r\n\r\n— Чем для Вас стал Тотальный диктант, если говорить о чём-то большем, нежели о написании текста под диктовку?\r\n\r\n— Стать автором Тотального диктанта - большая честь. Долг писателя в том, чтобы согласиться на такое предложение. Тотальный диктант — акция большого гражданского звучания. Когда мы идём на Тотальный диктант, мы заявляем, что мы — общество, мы — культура. Очень престижно стать автором Диктанта. Во-первых, это признание профессионального сообщества филологов. Во-вторых, признание читателей и любителей русского языка. Очень рад, что пригласили. Буду теперь хвастаться.\r\n\r\nАлексей подписывает две последних книги за сегодня, и мы прощаемся.', 'Диана Злобина', '../../images/kaa__20140412_0204.jpg', NULL, NULL, 'Антон Карлинер', 'Русский язык, Люди', '', 'Иванов', NULL, 'Нет', 'Обычный', 'Нет', 'Нет'),
(5, 'Русский язык-24', 'США, штат Колорадо', 'Денвер', 'Библиотека Элоизы Мэй', NULL, '15:00', 'В Колорадо диктант пишут под квас', 'В Денвере Тотальный диктант проводится впервые', 'В Денвере Тотальный диктант проводится впервые. В библиотеке, которую в местной русскоговорящей общине между собой называют русской, собрались 15 участников, чтобы отдать дань уважения русской языковой культуре и вспомнить опыт прошлых школьных лет. Диктант проводится легко и непринужденно. Этому способствует позитивный настрой участников, приятный голос преподавателя-филолога и пара бутылок вкусного домашнего кваса, заботливо принесенного участником Анатолием Карабаевым.', 'Екатерина Гейер ', '../../images/photo-2.jpg', NULL, NULL, 'Екатерина Гейер ', 'Русский язык, Слова', '', NULL, NULL, 'Нет', 'Обычный', 'Нет', 'Нет'),
(6, 'Русский язык-24', 'Канада', 'Калгари', NULL, NULL, '14:08', 'Прошлогодний отличник стал организатором', 'В Калгари уверены, что русский язык - один из главных языков мировой цивилизации', 'Организатор Тотального диктанта в Калгари Павел Денисов считает, что русский язык один из главных языков мировой цивилизации и нужно сделать все возможное для его сохранения. Именно это и подтолкнуло его к проведению диктанта.\r\n\r\n– Вы сказали, что в прошлом году писали диктант. Какую оценку получили?\r\n\r\n– Я не помню. (скромничает)\r\n\r\nМимо проходит Ксения Владимировна (именно она проверяла диктанты в прошлом году и будет делать в этом):\r\n– На пять он написал! А мой муж на четыре...\r\n\r\nВ разговор снова вступает Павел:\r\n\r\n– А в прошлом году две девочки допустили довольно много ошибок и вместо оценки преподаватель поставил  «смотрено», чтобы их не обижать. Они приехали в Калгари, когда были детьми, и у них есть проблемы с русским языком. Хорошо, что вообще написали, это было уже большое достижение!\r\n\r\n– Какие слова для вас главные в русском языке?\r\n\r\n– Одни из главных слов для меня – это смирение, патриотизм, самопожертвование. Эти понятия лежат в основе русской цивилизации.', 'Александр Шеметов ', '../../images/dsc_2597.jpg', NULL, 'Павел Денисов перед диктантом.', NULL, 'Русский язык, Грамотность', '', NULL, NULL, 'Нет', 'Обычный', 'Нет', 'Нет'),
(7, 'Русский язык-24', 'Россия', 'Санкт-Петербург', 'Набережная канала Грибоедова', NULL, '23:34', 'Псковское: «повонный человек» – это человек, находящийся под влиянием', '', 'Уроженец Псковской области Владимир Михайлов, ныне живущий в Петербурге, рассказывает о слове с его родины — «повонный»:\r\n\r\n— Повонный человек — это человек, находящийся под влиянием, ведомый.', 'Алексей Виноградов', NULL, NULL, NULL, NULL, 'Русский язык, Люди', '', NULL, NULL, 'Нет', 'Обычный', 'Нет', 'Нет');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parol` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('редактор','корреспондент','читатель','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'читатель',
  PRIMARY KEY (`login`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `parol`, `email`, `name`, `surname`, `status`) VALUES
('andreeva', 'a222', 'andreeva@mail.ru', 'Мария ', 'Андреева', 'корреспондент'),
('irinina', 'i333', 'irinina@yandex.ru', 'Юлия ', 'Иринина', 'читатель'),
('nata_svidetel', 'n111', 'kuznetcova@gmail.com', 'Анна', 'Кузнецова', 'редактор');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
