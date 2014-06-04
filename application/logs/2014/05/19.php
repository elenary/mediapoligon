<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 10:30:50 --- CRITICAL: ErrorException [ 2 ]: include(php/view/header.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\index.php [ 20 ] in D:\OpenServer\domains\mediapoligon\application\views\index.php:20
2014-05-19 10:30:50 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\application\views\index.php(20): Kohana_Core::error_handler(2, 'include(php/vie...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\mediapoligon\application\views\index.php(20): include()
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Welcome.php(7): Kohana_Response->body(Object(View))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\domains\mediapoligon\application\views\index.php:20
2014-05-19 12:23:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2014-05-19 12:23:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 14:26:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2014-05-19 14:26:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 14:27:14 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-19 14:27:14 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-19 14:35:42 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-19 14:35:42 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-19 14:52:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::title() ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2014-05-19 14:52:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 17:42:28 --- CRITICAL: ErrorException [ 2 ]: include(php/view/newstop_hor.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\index.php [ 24 ] in D:\OpenServer\domains\mediapoligon\application\views\index.php:24
2014-05-19 17:42:28 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\application\views\index.php(24): Kohana_Core::error_handler(2, 'include(php/vie...', 'D:\OpenServer\d...', 24, Array)
#1 D:\OpenServer\domains\mediapoligon\application\views\index.php(24): include()
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#4 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\domains\mediapoligon\application\views\index.php:24
2014-05-19 17:47:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_' not found ~ APPPATH\classes\Controller\Welcome.php [ 3 ] in file:line
2014-05-19 17:47:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 17:49:05 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-19 17:49:05 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137