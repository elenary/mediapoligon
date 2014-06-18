<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-04 21:23:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-06-04 21:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 21:29:07 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Cookie.php:67
2014-06-04 21:29:07 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\OpenServer\domains\mediapoligon\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Cookie.php:67
2014-06-04 21:29:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Cookie.php:67
2014-06-04 21:29:17 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\OpenServer\domains\mediapoligon\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Cookie.php:67
2014-06-04 21:32:06 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mediapoligon.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-04 21:32:06 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 D:\OpenServer\domains\mediapoligon\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('sdsdsddssdds', 'ssssddsdssdsdsd...', true)
#8 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Auth.php(17): Kohana_Auth->login('sdsdsddssdds', 'ssssddsdssdsdsd...', true)
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Auth->action_authorization()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#12 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\MySQL.php:359