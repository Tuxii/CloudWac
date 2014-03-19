<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-11 00:45:19 --- CRITICAL: Kohana_Exception [ 0 ]: The id_dir property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 00:45:19 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('id_dir', '1')
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(49): Kohana_ORM->__set('id_dir', '1')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 01:28:45 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\files\renamedir.php [ 8 ] in C:\wamp\www\kohana\application\views\files\renamedir.php:8
2013-10-11 01:28:45 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\renamedir.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 8, Array)
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
#15 {main} in C:\wamp\www\kohana\application\views\files\renamedir.php:8
2013-10-11 01:29:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\files\renamedir.php [ 10 ] in C:\wamp\www\kohana\application\views\files\renamedir.php:10
2013-10-11 01:29:03 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\renamedir.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 10, Array)
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
#15 {main} in C:\wamp\www\kohana\application\views\files\renamedir.php:10
2013-10-11 01:29:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\files\renamedir.php [ 10 ] in C:\wamp\www\kohana\application\views\files\renamedir.php:10
2013-10-11 01:29:15 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\renamedir.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 10, Array)
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
#15 {main} in C:\wamp\www\kohana\application\views\files\renamedir.php:10
2013-10-11 01:34:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dir ~ APPPATH\views\files\renamedir.php [ 1 ] in C:\wamp\www\kohana\application\views\files\renamedir.php:1
2013-10-11 01:34:01 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\renamedir.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 1, Array)
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
#15 {main} in C:\wamp\www\kohana\application\views\files\renamedir.php:1
2013-10-11 01:34:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\files.php [ 199 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:199
2013-10-11 01:34:15 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(199): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 199, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_renamedir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:199
2013-10-11 01:41:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$space' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 222 ] in file:line
2013-10-11 01:41:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 01:42:52 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-11 01:42:52 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(223): Kohana_ORM->__get('name')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:603
2013-10-11 01:50:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\files\list.php [ 63 ] in file:line
2013-10-11 01:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 02:07:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 221 ] in file:line
2013-10-11 02:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 02:07:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH\classes\Controller\files.php [ 220 ] in file:line
2013-10-11 02:07:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 02:07:52 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete file model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:07:52 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(220): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:08:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\Controller\files.php [ 225 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:225
2013-10-11 02:08:11 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(225): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 225, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:225
2013-10-11 02:08:22 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:218
2013-10-11 02:08:22 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(218): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:218
2013-10-11 02:10:46 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::get(), called in C:\wamp\www\kohana\application\classes\Controller\files.php on line 217 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 614 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:614
2013-10-11 02:10:46 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(614): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\koh...', 614, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(217): Kohana_ORM->get()
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:614
2013-10-11 02:11:02 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:11:02 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:33:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$value' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 228 ] in file:line
2013-10-11 02:33:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 02:33:42 --- CRITICAL: ErrorException [ 2 ]: unlink(/kohana/Upload/52573cf66c29636589-2.png): No such file or directory ~ APPPATH\classes\Controller\files.php [ 228 ] in file:line
2013-10-11 02:33:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/kohana/...', 'C:\wamp\www\koh...', 228, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(228): unlink('/kohana/Upload/...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 02:34:15 --- CRITICAL: ErrorException [ 2 ]: unlink(): http does not allow unlinking ~ APPPATH\classes\Controller\files.php [ 228 ] in file:line
2013-10-11 02:34:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(): http ...', 'C:\wamp\www\koh...', 228, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(228): unlink('http://localhos...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 02:34:26 --- CRITICAL: ErrorException [ 2 ]: unlink(C:\wamp\www\kohana\52573cf66c29636589-2.png): No such file or directory ~ APPPATH\classes\Controller\files.php [ 228 ] in file:line
2013-10-11 02:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:\wamp\...', 'C:\wamp\www\koh...', 228, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(228): unlink('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 02:34:39 --- CRITICAL: ErrorException [ 2 ]: unlink(C:\wamp\www\kohana\kohana/52573cf66c29636589-2.png): No such file or directory ~ APPPATH\classes\Controller\files.php [ 228 ] in file:line
2013-10-11 02:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:\wamp\...', 'C:\wamp\www\koh...', 228, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(228): unlink('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 02:35:01 --- CRITICAL: ErrorException [ 2 ]: unlink(C:\wamp\www\kohana\\52573cf66c29636589-2.png): No such file or directory ~ APPPATH\classes\Controller\files.php [ 228 ] in file:line
2013-10-11 02:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:\wamp\...', 'C:\wamp\www\koh...', 228, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(228): unlink('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 02:35:54 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:35:54 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:20 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:20 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:22 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:22 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:33 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:33 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:34 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:34 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:34 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete directory model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:34 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(219): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:219
2013-10-11 02:36:54 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete file model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:221
2013-10-11 02:36:54 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(221): Kohana_ORM->delete()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:221
2013-10-11 02:37:13 --- CRITICAL: ErrorException [ 2 ]: unlink(C:\wamp\www\kohana\\Upload\52573cf66c29636589-2.png): No such file or directory ~ APPPATH\classes\Controller\files.php [ 227 ] in file:line
2013-10-11 02:37:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:\wamp\...', 'C:\wamp\www\koh...', 227, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(227): unlink('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 02:51:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: -2147483648 ~ APPPATH\classes\Controller\website.php [ 21 ] in C:\wamp\www\kohana\application\classes\Controller\website.php:21
2013-10-11 02:51:21 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\website.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\koh...', 21, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(79): Controller_Website->formatBytes('-10391808')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\application\classes\Controller\website.php:21
2013-10-11 02:51:50 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:50 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(220): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:51 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:51 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(220): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:51 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:51 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(220): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:52 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(220): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 02:51:52 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(220): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:220
2013-10-11 09:40:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\files.php [ 142 ] in file:line
2013-10-11 09:40:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:40:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\files.php [ 142 ] in file:line
2013-10-11 09:40:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:40:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 150 ] in file:line
2013-10-11 09:40:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:40:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 150 ] in file:line
2013-10-11 09:40:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:40:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 150 ] in file:line
2013-10-11 09:40:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:40:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 150 ] in file:line
2013-10-11 09:40:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:40:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\files.php [ 150 ] in file:line
2013-10-11 09:40:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 09:42:01 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\classes\Controller\files.php [ 146 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:146
2013-10-11 09:42:01 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(146): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\koh...', 146, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_delfile()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:146
2013-10-11 10:11:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\files.php [ 245 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:245
2013-10-11 10:11:27 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(245): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 245, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:245
2013-10-11 10:30:05 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\files\list.php [ 4 ] in C:\wamp\www\kohana\application\views\files\list.php:4
2013-10-11 10:30:05 --- DEBUG: #0 C:\wamp\www\kohana\application\views\files\list.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 4, Array)
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
#15 {main} in C:\wamp\www\kohana\application\views\files\list.php:4
2013-10-11 10:35:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$files' (T_VARIABLE) ~ APPPATH\classes\Controller\files.php [ 91 ] in file:line
2013-10-11 10:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 10:36:21 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\files.php [ 80 ] in file:line
2013-10-11 10:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\wamp\www\koh...', 80, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(80): substr('0', 4, '6.56M')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 10:36:49 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\files.php [ 81 ] in file:line
2013-10-11 10:36:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\wamp\www\koh...', 81, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(81): substr('0', 4, '6.56M')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-11 10:37:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\files.php [ 81 ] in file:line
2013-10-11 10:37:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 10:41:32 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-11 10:41:32 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(25): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-11 10:49:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ']' ~ APPPATH\classes\Controller\files.php [ 34 ] in file:line
2013-10-11 10:49:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 10:49:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ']' ~ APPPATH\classes\Controller\files.php [ 34 ] in file:line
2013-10-11 10:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 11:12:36 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'hash_password' ~ MODPATH\orm\classes\Kohana\ORM.php [ 1210 ] in file:line
2013-10-11 11:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\koh...', 1210, Array)
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
2013-10-11 11:18:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\Controller\files.php [ 113 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:113
2013-10-11 11:18:22 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 113, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:113
2013-10-11 11:19:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\files.php [ 112 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:112
2013-10-11 11:19:00 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 112, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:112
2013-10-11 11:19:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\files.php [ 112 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:112
2013-10-11 11:19:07 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 112, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:112
2013-10-11 11:19:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\files.php [ 172 ] in file:line
2013-10-11 11:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 11:57:46 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 12345678 ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-11 11:57:46 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\koh...', 102, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Valid.php(548): Kohana_Validation->offsetGet('12345678')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'password_confir...', '12345678')
#3 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1266): Kohana_Validation->check()
#5 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#6 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(Object(Validation))
#7 C:\wamp\www\kohana\application\classes\Controller\users.php(50): Kohana_ORM->save(Object(Validation))
#8 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-11 14:09:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\files.php [ 116 ] in file:line
2013-10-11 14:09:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 15:31:12 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'pierre' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`, `max_allowed_space`, `space_used`) VALUES ('pierre', 'ifrah.sacha@gmail.com', 'bd3fa738ab224f9cd80f8fe374e9019a60e44d7139571adf36b4851311a0821b', 104857600, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-11 15:31:12 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\kohana\application\classes\Controller\users.php(52): Kohana_ORM->save()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-11 15:36:45 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:36:45 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(239): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:36:46 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:36:46 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(239): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:37:23 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:37:23 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(239): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:38:47 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'joss' for key 'uniq_username' [ UPDATE `users` SET `username` = 'joss' WHERE `id` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-11 15:38:47 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\wamp\www\kohana\application\classes\Controller\users.php(141): Kohana_ORM->save()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-10-11 15:44:46 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:239
2013-10-11 15:44:46 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(239): Kohana_ORM->find()
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_deldir()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:239