<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 10:20:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$fileDb' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 39 ] in file:line
2013-10-09 10:20:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:29:44 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\Kohana\Upload.php [ 87 ] in file:line
2013-10-09 10:29:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\wamp\www\koh...', 87, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(87): move_uploaded_file('C:\wamp\tmp\php...', 'C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\application\classes\Controller\files.php(30): Kohana_Upload::save(Array, '', 'Upload\3')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-09 10:33:27 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\Kohana\Upload.php [ 87 ] in file:line
2013-10-09 10:33:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\wamp\www\koh...', 87, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(87): move_uploaded_file('C:\wamp\tmp\php...', 'C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\application\classes\Controller\files.php(31): Kohana_Upload::save(Array, '', 'Upload\3')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-09 10:46:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 60 ] in file:line
2013-10-09 10:46:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:47:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:13 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:18 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:22 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:47:24 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:48:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:48:06 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:48:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:48:08 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:03 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:05 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:55 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\Controller\files.php [ 60 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:49:57 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 60, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:60
2013-10-09 10:50:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\views\files\list.php [ 11 ] in C:\wamp\www\kohana\application\views\files\list.php:11
2013-10-09 10:50:13 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 11, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(50): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:11
2013-10-09 10:50:43 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\files\list.php [ 11 ] in C:\wamp\www\kohana\application\views\files\list.php:11
2013-10-09 10:50:43 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(11): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\koh...', 11, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(50): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#9 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:11
2013-10-09 10:50:48 --- CRITICAL: Kohana_Exception [ 0 ]: The date_add² property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-09 10:50:48 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_add??')
#1 C:\wamp\www\kohana\application\views\files\list.php(15): Kohana_ORM->__get('date_add??')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#4 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\kohana\application\views\template.php(50): Kohana_View->__toString()
#6 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#7 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\kohana\application\classes\Controller\website.php(61): Kohana_Controller_Template->after()
#10 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Website->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-09 10:54:18 --- CRITICAL: ErrorException [ 1 ]: Cannot access parent:: when current class scope has no parent ~ APPPATH\views\files\list.php [ 13 ] in file:line
2013-10-09 10:54:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:30 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\files\list.php [ 13 ] in file:line
2013-10-09 10:54:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function formatBytes() ~ APPPATH\views\files\list.php [ 13 ] in file:line
2013-10-09 10:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:08:05 --- CRITICAL: Exception [ 0 ]: Unable to save uploaded file! ~ APPPATH\classes\Controller\files.php [ 34 ] in C:\wamp\www\kohana\system\classes\Kohana\Controller.php:84
2013-10-09 11:08:05 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\wamp\www\kohana\system\classes\Kohana\Controller.php:84
2013-10-09 11:19:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\files.php [ 70 ] in file:line
2013-10-09 11:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:19:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 72 ] in file:line
2013-10-09 11:19:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:20:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 81 ] in file:line
2013-10-09 11:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:20:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::get(), called in C:\wamp\www\kohana\application\classes\Controller\files.php on line 78 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 614 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:614
2013-10-09 11:20:27 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(614): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\koh...', 614, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(78): Kohana_ORM->get()
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:614
2013-10-09 11:20:37 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:78
2013-10-09 11:20:37 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(78): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:78
2013-10-09 11:20:44 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:78
2013-10-09 11:20:44 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(78): Kohana_ORM->find_all()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:78
2013-10-09 12:38:53 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:62
2013-10-09 12:38:53 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(62): Kohana_ORM->find_all()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:62
2013-10-09 12:39:13 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::get(), called in C:\wamp\www\kohana\application\classes\Controller\files.php on line 62 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 614 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:614
2013-10-09 12:39:13 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(614): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\koh...', 614, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(62): Kohana_ORM->get()
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:614
2013-10-09 12:39:26 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:62
2013-10-09 12:39:26 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(62): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:62
2013-10-09 19:46:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\files.php [ 39 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:39
2013-10-09 19:46:52 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 39, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:39
2013-10-09 20:36:05 --- CRITICAL: Kohana_Exception [ 0 ]: The serv_filename property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-09 20:36:05 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('serv_filename', '5255a2153f0ebbu...')
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(41): Kohana_ORM->__set('serv_filename', '5255a2153f0ebbu...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-09 21:07:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:07:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:07:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:07:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 7 ] in file:line
2013-10-09 21:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 88 ] in file:line
2013-10-09 21:08:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$directory' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 102 ] in file:line
2013-10-09 21:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$directory' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 102 ] in file:line
2013-10-09 21:08:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$directory' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 102 ] in file:line
2013-10-09 21:08:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$directory' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 102 ] in file:line
2013-10-09 21:08:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:08:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_directory' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-09 21:08:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:09:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Directory' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-09 21:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:10:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH\classes\Controller\files.php [ 96 ] in file:line
2013-10-09 21:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 21:10:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\files.php [ 99 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:99
2013-10-09 21:10:24 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(99): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 99, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_newdir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:99
2013-10-09 21:11:26 --- CRITICAL: Kohana_Exception [ 0 ]: The id_parent property does not exist in the Model_Directory class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-09 21:11:26 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('id_parent', '1')
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(101): Kohana_ORM->__set('id_parent', '1')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_newdir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-09 21:59:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\Controller\files.php [ 71 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:71
2013-10-09 21:59:11 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 71, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:71
2013-10-09 22:47:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 92 ] in file:line
2013-10-09 22:47:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:47:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\files.php [ 104 ] in file:line
2013-10-09 22:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:52:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\files.php [ 106 ] in file:line
2013-10-09 22:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:52:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: listDirs ~ APPPATH\views\files\view.php [ 25 ] in C:\wamp\www\kohana\application\views\files\view.php:25
2013-10-09 22:52:47 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\view.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 25, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\template.php(51): Kohana_View->__toString()
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
#15 {main} in C:\wamp\www\kohana\application\views\files\view.php:25
2013-10-09 23:55:09 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'hash_password' ~ MODPATH\orm\classes\Kohana\ORM.php [ 1210 ] in file:line
2013-10-09 23:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\koh...', 1210, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', '12345678')
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', '12345678')
#4 C:\wamp\www\kohana\application\classes\Controller\users.php(35): Kohana_ORM->__set('password', '12345678')
#5 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line