<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-07 00:25:21 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 00:25:21 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\kohana\application\classes\Controller\users.php(33): Kohana_ORM::factory('User')
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 00:25:47 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 00:25:47 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\kohana\application\classes\Controller\users.php(33): Kohana_ORM::factory('User')
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 01:11:54 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1668
2013-10-07 01:11:54 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 C:\wamp\www\kohana\application\classes\Controller\users.php(33): Kohana_ORM::factory('User')
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1668
2013-10-07 03:18:02 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1668
2013-10-07 03:18:02 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 C:\wamp\www\kohana\application\classes\Controller\users.php(35): Kohana_ORM::factory('User')
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1668
2013-10-07 03:19:36 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 03:19:36 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\kohana\application\classes\Controller\users.php(35): Kohana_ORM::factory('User')
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-07 03:19:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 03:19:43 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(39): Kohana_ORM->save()
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 03:20:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\users.php [ 28 ] in file:line
2013-10-07 03:20:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 03:20:42 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 03:20:42 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(37): Kohana_ORM->save()
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 03:21:16 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 03:21:16 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(39): Kohana_ORM->save()
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 03:21:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\users.php [ 34 ] in file:line
2013-10-07 03:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 09:36:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-10-07 09:36:14 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-10-07 09:36:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH\classes\Controller\users.php [ 39 ] in file:line
2013-10-07 09:36:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 09:36:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH\classes\Controller\users.php [ 39 ] in file:line
2013-10-07 09:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 09:36:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH\classes\Controller\users.php [ 39 ] in file:line
2013-10-07 09:36:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 09:38:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH\classes\Controller\users.php [ 39 ] in file:line
2013-10-07 09:38:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 09:51:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\users.php [ 34 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:34
2013-10-07 09:51:54 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:34
2013-10-07 10:45:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\users.php [ 37 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:37
2013-10-07 10:45:51 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 37, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:37
2013-10-07 10:46:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\users.php [ 37 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:37
2013-10-07 10:46:09 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 37, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:37
2013-10-07 10:46:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\users.php [ 37 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:37
2013-10-07 10:46:22 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 37, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:37
2013-10-07 10:46:35 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-07 10:46:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\koh...', 377, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\wamp\www\kohana\application\classes\Controller\users.php(47): Kohana_ORM->save()
#6 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-07 10:46:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: e ~ APPPATH\classes\Controller\users.php [ 53 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:53
2013-10-07 10:46:59 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 53, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:53
2013-10-07 10:47:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: e ~ APPPATH\classes\Controller\users.php [ 53 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:53
2013-10-07 10:47:13 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 53, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:53
2013-10-07 11:00:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$auth ~ APPPATH\classes\Controller\users.php [ 45 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:45
2013-10-07 11:00:37 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 45, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:45
2013-10-07 11:01:38 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash_password() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\users.php [ 45 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:45
2013-10-07 11:01:38 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(45): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\wamp\www\koh...', 45, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:45
2013-10-07 11:03:22 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\kohana\modules\auth\classes\Kohana\Auth.php:143
2013-10-07 11:03:22 --- DEBUG: #0 C:\wamp\www\kohana\modules\auth\classes\Kohana\Auth.php(143): Kohana_Auth->hash('qsd')
#1 C:\wamp\www\kohana\application\classes\Controller\users.php(45): Kohana_Auth->hash_password('qsd')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\auth\classes\Kohana\Auth.php:143
2013-10-07 11:08:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\classes\Controller\users.php [ 45 ] in file:line
2013-10-07 11:08:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 11:08:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Users::request() ~ APPPATH\classes\Controller\users.php [ 44 ] in file:line
2013-10-07 11:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 11:37:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-07 11:37:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 11:38:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-07 11:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 11:56:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2013-10-07 11:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 12:00:55 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-07 12:00:55 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 C:\wamp\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pierre', 'ppp', false)
#8 C:\wamp\www\kohana\application\classes\Controller\users.php(76): Kohana_Auth->login('pierre', 'ppp')
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-07 12:01:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_ORM' not found ~ APPPATH\classes\Model\user.php [ 1 ] in file:line
2013-10-07 12:01:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 12:01:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-07 12:01:27 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 C:\wamp\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pierre', 'ppp', false)
#8 C:\wamp\www\kohana\application\classes\Controller\users.php(76): Kohana_Auth->login('pierre', 'ppp')
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-07 12:43:07 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:43:07 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(49): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:44:51 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:44:51 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(49): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:45:56 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:45:56 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(49): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:46:19 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:46:19 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(49): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 12:55:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\users\signup.php [ 4 ] in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 12:55:20 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(55): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 12:55:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\users\signup.php [ 4 ] in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 12:55:38 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(55): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 12:55:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\users\signup.php [ 4 ] in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 12:55:42 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(55): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 13:00:35 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 13:00:35 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(48): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-07 13:03:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$message' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\classes\Controller\users.php [ 64 ] in file:line
2013-10-07 13:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:26:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$message' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\classes\Controller\users.php [ 64 ] in file:line
2013-10-07 14:26:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:36:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\website.php [ 21 ] in file:line
2013-10-07 14:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:37:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\website.php [ 21 ] in file:line
2013-10-07 14:37:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:37:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH\classes\Controller\website.php [ 21 ] in C:\wamp\www\kohana\application\classes\Controller\website.php:21
2013-10-07 14:37:45 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\website.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 21, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(69): Controller_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\website.php:21
2013-10-07 14:42:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\Model\user.php [ 7 ] in file:line
2013-10-07 14:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:45:20 --- CRITICAL: Kohana_Exception [ 0 ]: The _rules property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-07 14:45:20 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_rules')
#1 C:\wamp\www\kohana\application\classes\Model\user.php(8): Kohana_ORM->__get('_rules')
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(44): Model_User->validate_create(Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-07 14:48:30 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in C:\wamp\www\kohana\application\classes\Model\user.php on line 10 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:238
2013-10-07 14:48:30 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\koh...', 238, Array)
#1 C:\wamp\www\kohana\application\classes\Model\user.php(10): Kohana_Validation->rules('password', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(44): Model_User->validate_create(Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:238
2013-10-07 14:56:15 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in C:\wamp\www\kohana\application\classes\Model\user.php on line 40 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:238
2013-10-07 14:56:15 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\koh...', 238, Array)
#1 C:\wamp\www\kohana\application\classes\Model\user.php(40): Kohana_Validation->rules('password', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(44): Model_User->validate_create(Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:238
2013-10-07 17:12:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\users\signup.php [ 4 ] in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 17:12:56 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(58): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 17:13:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\users\signup.php [ 4 ] in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 17:13:38 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(57): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:4
2013-10-07 17:23:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\users.php [ 43 ] in file:line
2013-10-07 17:23:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:30:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\users.php [ 43 ] in file:line
2013-10-07 17:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 19:16:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Design' not found ~ APPPATH\classes\Controller\users.php [ 3 ] in file:line
2013-10-07 19:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 19:19:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 73 ] in file:line
2013-10-07 19:19:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 19:20:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 73 ] in file:line
2013-10-07 19:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 19:20:33 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-07 19:20:33 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-07 19:20:50 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-07 19:20:50 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(7): Kohana_View::factory('user/info')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-07 20:12:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 88 ] in file:line
2013-10-07 20:12:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 20:12:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 88 ] in file:line
2013-10-07 20:12:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:13:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''/media/css/styles.css'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\website.php [ 48 ] in file:line
2013-10-07 21:13:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:16:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\users\signup.php [ 9 ] in C:\wamp\www\kohana\application\views\users\signup.php:9
2013-10-07 21:16:06 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(9): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\koh...', 9, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(58): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:9
2013-10-07 21:16:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\users\signup.php [ 9 ] in file:line
2013-10-07 21:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:17:22 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\users\signup.php [ 10 ] in C:\wamp\www\kohana\application\views\users\signup.php:10
2013-10-07 21:17:22 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(10): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(58): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:10
2013-10-07 21:17:27 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\users\signup.php [ 10 ] in C:\wamp\www\kohana\application\views\users\signup.php:10
2013-10-07 21:17:27 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(10): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(58): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:10
2013-10-07 21:17:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\users\signup.php [ 10 ] in file:line
2013-10-07 21:17:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:18:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\users\signup.php [ 10 ] in C:\wamp\www\kohana\application\views\users\signup.php:10
2013-10-07 21:18:07 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\signup.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\koh...', 10, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(58): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\signup.php:10
2013-10-07 21:26:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 16 ] in file:line
2013-10-07 21:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:32:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Connexion'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\views\users\signup.php [ 29 ] in file:line
2013-10-07 21:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:34:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\users\login.php [ 8 ] in C:\wamp\www\kohana\application\views\users\login.php:8
2013-10-07 21:34:16 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\login.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 8, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(48): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(58): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\login.php:8
2013-10-07 21:39:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\template.php [ 30 ] in C:\wamp\www\kohana\application\views\template.php:30
2013-10-07 21:39:53 --- DEBUG: #0 C:\wamp\www\kohana\application\views\template.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 30, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\application\classes\Controller\website.php(60): Kohana_Controller_Template->after()
#5 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana\application\views\template.php:30
2013-10-07 21:43:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:43:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:44:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\template.php [ 31 ] in file:line
2013-10-07 21:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:49:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\users\edit.php [ 16 ] in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:49:13 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 16, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:49:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\users.php [ 98 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:98
2013-10-07 21:49:51 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 98, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:98
2013-10-07 21:50:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\users\edit.php [ 16 ] in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:50:21 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 16, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:50:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\users\edit.php [ 16 ] in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:50:28 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 16, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:50:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\users\edit.php [ 16 ] in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:50:35 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 16, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:51:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\users\edit.php [ 16 ] in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:51:11 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 16, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:16
2013-10-07 21:51:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\users\edit.php [ 4 ] in C:\wamp\www\kohana\application\views\users\edit.php:4
2013-10-07 21:51:45 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:4
2013-10-07 21:52:04 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 34 ] in C:\wamp\www\kohana\application\views\template.php:34
2013-10-07 21:52:04 --- DEBUG: #0 C:\wamp\www\kohana\application\views\template.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#5 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana\application\views\template.php:34
2013-10-07 21:52:04 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 34 ] in C:\wamp\www\kohana\application\views\template.php:34
2013-10-07 21:52:04 --- DEBUG: #0 C:\wamp\www\kohana\application\views\template.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#5 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana\application\views\template.php:34
2013-10-07 21:52:05 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 34 ] in C:\wamp\www\kohana\application\views\template.php:34
2013-10-07 21:52:05 --- DEBUG: #0 C:\wamp\www\kohana\application\views\template.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 34, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#5 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana\application\views\template.php:34
2013-10-07 21:52:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user2 ~ APPPATH\views\users\edit.php [ 4 ] in C:\wamp\www\kohana\application\views\users\edit.php:4
2013-10-07 21:52:26 --- DEBUG: #0 C:\wamp\www\kohana\application\views\users\edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\users\edit.php:4
2013-10-07 21:53:02 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\users.php [ 98 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:98
2013-10-07 21:53:02 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(98): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\wamp\www\koh...', 98, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:98
2013-10-07 21:53:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\users.php [ 98 ] in file:line
2013-10-07 21:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:53:32 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\users.php [ 98 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:98
2013-10-07 21:53:32 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(98): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\wamp\www\koh...', 98, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:98
2013-10-07 21:54:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\users.php [ 95 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:95
2013-10-07 21:54:02 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 95, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:95
2013-10-07 21:56:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\users.php [ 95 ] in C:\wamp\www\kohana\application\classes\Controller\users.php:95
2013-10-07 21:56:12 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\users.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 95, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\users.php:95
2013-10-07 22:02:47 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-07 22:02:47 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(44): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251