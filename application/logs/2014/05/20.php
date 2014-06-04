<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-20 19:53:29 --- CRITICAL: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-20 19:53:29 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(137): Kohana_View->set_filename('index')
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(30): Kohana_View->__construct('index', NULL)
#2 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Page.php(8): Kohana_View::factory('index')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-20 19:53:29 --- CRITICAL: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137
2014-05-20 19:53:29 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(137): Kohana_View->set_filename('index')
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php(30): Kohana_View->__construct('index', NULL)
#2 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Page.php(8): Kohana_View::factory('index')
#3 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\View.php:137