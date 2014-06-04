<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-25 00:11:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Topic::getAuthor() ~ APPPATH\views\topic.php [ 13 ] in file:line
2014-05-25 00:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 00:12:04 --- CRITICAL: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Topic class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php:603
2014-05-25 00:12:04 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('author')
#1 D:\OpenServer\domains\mediapoligon\application\classes\Model\Topic.php(92): Kohana_ORM->__get('author')
#2 D:\OpenServer\domains\mediapoligon\application\views\topic.php(13): Model_Topic->getAuthor()
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 D:\OpenServer\domains\mediapoligon\application\views\template.php(61): Kohana_View->__toString()
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#13 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#16 {main} in D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php:603
2014-05-25 00:12:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Topic::getAuthor() ~ APPPATH\views\topic.php [ 13 ] in file:line
2014-05-25 00:12:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line