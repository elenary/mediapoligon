<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-18 09:45:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\write.php [ 295 ] in file:line
2014-06-18 09:45:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 09:47:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\write.php [ 295 ] in file:line
2014-06-18 09:47:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 09:52:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\write.php [ 295 ] in file:line
2014-06-18 09:52:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 09:52:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\write.php [ 295 ] in file:line
2014-06-18 09:52:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 12:27:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\write.php [ 264 ] in D:\OpenServer\domains\mediapoligon\application\views\write.php:264
2014-06-18 12:27:03 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\application\views\write.php(264): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 264, Array)
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Admin.php(8): Kohana_Response->body(Object(View))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Admin->action_write()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\application\views\write.php:264
2014-06-18 12:33:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\write.php [ 264 ] in D:\OpenServer\domains\mediapoligon\application\views\write.php:264
2014-06-18 12:33:32 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\application\views\write.php(264): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 264, Array)
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Admin.php(8): Kohana_Response->body(Object(View))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Admin->action_write()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\application\views\write.php:264
2014-06-18 12:34:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: topics ~ APPPATH\views\write.php [ 264 ] in D:\OpenServer\domains\mediapoligon\application\views\write.php:264
2014-06-18 12:34:24 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\application\views\write.php(264): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 264, Array)
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Admin.php(8): Kohana_Response->body(Object(View))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Admin->action_write()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\application\views\write.php:264
2014-06-18 13:01:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Model\Topic.php [ 108 ] in file:line
2014-06-18 13:01:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 14:00:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: topics ~ APPPATH\views\newslist.php [ 91 ] in D:\OpenServer\domains\mediapoligon\application\views\newslist.php:91
2014-06-18 14:00:19 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\application\views\newslist.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 91, Array)
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Admin.php(17): Kohana_Response->body(Object(View))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Admin->action_newslist()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\application\views\newslist.php:91