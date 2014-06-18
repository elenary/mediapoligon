<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-09 09:27:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mediapoligon.roles_users' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '3' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php:251
2014-06-09 09:27:50 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 D:\OpenServer\domains\mediapoligon\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('nata_svidetel', 'n111', true)
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Auth.php(21): Kohana_Auth->login('nata_svidetel', 'n111', true)
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Auth->action_authorization()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php:251
2014-06-09 09:32:48 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mediapoligon.roles_users' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '3' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php:251
2014-06-09 09:32:48 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 D:\OpenServer\domains\mediapoligon\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('nata_svidetel', 'n111', true)
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Auth.php(21): Kohana_Auth->login('nata_svidetel', 'n111', true)
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Auth->action_authorization()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php:251
2014-06-09 09:35:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mediapoligon.roles_users' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '3' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php:251
2014-06-09 09:35:53 --- DEBUG: #0 D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 D:\OpenServer\domains\mediapoligon\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 D:\OpenServer\domains\mediapoligon\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('nata_svidetel', 'n111', true)
#5 D:\OpenServer\domains\mediapoligon\application\classes\Controller\Auth.php(21): Kohana_Auth->login('nata_svidetel', 'n111', true)
#6 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Controller.php(84): Controller_Auth->action_authorization()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\mediapoligon\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\mediapoligon\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\mediapoligon\modules\database\classes\Kohana\Database\Query.php:251