<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-10 12:32:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_directories' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-10 12:32:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 12:33:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_directory' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-10 12:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 12:33:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_directory' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-10 12:33:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 12:38:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.directories' doesn't exist [ SHOW FULL COLUMNS FROM `directories` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-10 12:38:43 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('directories')
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\kohana\application\classes\Controller\files.php(65): Kohana_ORM::factory('directory')
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-10 12:45:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fild ~ APPPATH\views\files\list.php [ 8 ] in C:\wamp\www\kohana\application\views\files\list.php:8
2013-10-10 12:45:21 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 8, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:8
2013-10-10 14:38:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 84 ] in file:line
2013-10-10 14:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 14:38:53 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:83
2013-10-10 14:38:53 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(83): Kohana_ORM->find_all()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:83
2013-10-10 14:40:26 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-10 14:40:26 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\wamp\www\kohana\application\views\files\view.php(11): Kohana_ORM->__get('name')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#4 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#7 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#10 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-10 14:53:37 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/kohana/Upload/5256a33694234Nouveau_document_texte_(2).txt): failed to open stream: No such file or directory ~ APPPATH\views\files\view.php [ 12 ] in file:line
2013-10-10 14:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\koh...', 12, Array)
#1 C:\wamp\www\kohana\application\views\files\view.php(12): file_get_contents('/kohana/Upload/...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#4 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#7 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#10 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2013-10-10 15:11:47 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-10 15:11:47 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(23): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-10 15:12:17 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-10 15:12:17 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(23): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-10 15:13:38 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-10 15:13:38 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(23): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-10 16:09:49 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 1134 ] in file:line
2013-10-10 16:09:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 16:30:56 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-10 16:30:56 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\wamp\www\kohana\application\views\files\view.php(3): Kohana_ORM->__get('name')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#4 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#7 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#10 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-10 17:11:00 --- CRITICAL: Kohana_Exception [ 0 ]: The site_bytes property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-10 17:11:00 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('site_bytes', 6881791)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(44): Kohana_ORM->__set('site_bytes', 6881791)
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-10 18:45:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 700 ] in file:line
2013-10-10 18:45:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 20:21:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\files\view.php [ 4 ] in file:line
2013-10-10 20:21:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 20:32:19 --- CRITICAL: Kohana_Exception [ 0 ]: The size_bytes property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-10 20:32:19 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('size_bytes', 60537)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(44): Kohana_ORM->__set('size_bytes', 60537)
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-10 20:52:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\views\files\list.php [ 9 ] in file:line
2013-10-10 20:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 20:55:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\views\files\list.php [ 9 ] in file:line
2013-10-10 20:55:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 20:55:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\views\files\list.php [ 9 ] in file:line
2013-10-10 20:55:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 21:02:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$dirs' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 16 ] in file:line
2013-10-10 21:02:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 21:05:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Files::param() ~ APPPATH\classes\Controller\files.php [ 73 ] in file:line
2013-10-10 21:05:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 21:05:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\files.php [ 74 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:74
2013-10-10 21:05:43 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 74, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:74
2013-10-10 21:08:47 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\files\list.php [ 31 ] in C:\wamp\www\kohana\application\views\files\list.php:31
2013-10-10 21:08:47 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\koh...', 31, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:31
2013-10-10 21:16:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\views\files\list.php [ 20 ] in C:\wamp\www\kohana\application\views\files\list.php:20
2013-10-10 21:16:54 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 20, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:20
2013-10-10 21:17:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\views\files\list.php [ 20 ] in C:\wamp\www\kohana\application\views\files\list.php:20
2013-10-10 21:17:06 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 20, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(54): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(69): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:20
2013-10-10 22:01:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\views\files\list.php [ 65 ] in file:line
2013-10-10 22:01:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line