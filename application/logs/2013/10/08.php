<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-08 00:10:42 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-08 00:10:42 --- DEBUG: #0 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(127): Kohana_ORM->save()
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php:1302
2013-10-08 10:38:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:38:14 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(20): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:46:38 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:46:38 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(20): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:46:46 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:46:46 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(20): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:46:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:46:55 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(20): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:47:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:47:26 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\wamp\www\kohana\application\classes\Controller\files.php(20): Kohana_Validation->check()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\system\classes\Kohana\Upload.php:129
2013-10-08 10:47:35 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 10:47:35 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Upload::save(Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 10:47:45 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 10:47:45 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Upload::save(Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:00:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: form ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-08 11:00:01 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\koh...', 102, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Validation->offsetGet('form')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-08 11:00:32 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:00:32 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Upload::save(Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:01:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: media ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-08 11:01:45 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\koh...', 102, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Validation->offsetGet('media')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-08 11:01:58 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:01:58 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Upload::save(Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:02:18 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:02:18 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Upload::save(Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:02:38 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:02:38 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Upload::save(Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:06:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\files.php [ 24 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:06:57 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 24, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:24
2013-10-08 11:07:50 --- CRITICAL: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH\classes\Controller\files.php [ 26 ] in file:line
2013-10-08 11:07:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', 'C:\wamp\www\koh...', 26, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(26): mkdir('3')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-08 11:08:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 3file ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-08 11:08:17 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\koh...', 102, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(27): Kohana_Validation->offsetGet('3file')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:102
2013-10-08 11:09:17 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Upload/3' not found ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-08 11:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\koh...', 377, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\wamp\www\kohana\application\classes\Controller\files.php(22): Kohana_Validation->check()
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 11:09:36 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Upload/test' not found ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-08 11:09:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\koh...', 377, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\wamp\www\kohana\application\classes\Controller\files.php(22): Kohana_Validation->check()
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 11:10:36 --- CRITICAL: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH\classes\Controller\files.php [ 26 ] in file:line
2013-10-08 11:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', 'C:\wamp\www\koh...', 26, Array)
#1 C:\wamp\www\kohana\application\classes\Controller\files.php(26): mkdir('Upload/3')
#2 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-08 11:11:33 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(C:\wamp\www\kohana\Upload\Upload/3): failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Upload.php [ 87 ] in file:line
2013-10-08 11:11:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\wamp\www\koh...', 87, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(87): move_uploaded_file('C:\wamp\tmp\php...', 'C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\application\classes\Controller\files.php(29): Kohana_Upload::save(Array, 'Upload/3')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 11:11:53 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\Kohana\Upload.php [ 87 ] in file:line
2013-10-08 11:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\wamp\www\koh...', 87, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Upload.php(87): move_uploaded_file('C:\wamp\tmp\php...', 'C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\application\classes\Controller\files.php(29): Kohana_Upload::save(Array, '/3')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 11:12:19 --- CRITICAL: Kohana_Exception [ 0 ]: Directory /3 must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:29
2013-10-08 11:12:19 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(29): Kohana_Upload::save(Array, 'test', '/3')
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:29
2013-10-08 11:12:51 --- CRITICAL: Kohana_Exception [ 0 ]: Directory \3 must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\kohana\application\classes\Controller\files.php:29
2013-10-08 11:12:51 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\files.php(29): Kohana_Upload::save(Array, 'test', '\3')
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\files.php:29
2013-10-08 11:14:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\files.php [ 29 ] in file:line
2013-10-08 11:14:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:23:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\files.php [ 29 ] in file:line
2013-10-08 11:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:52:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\home.php [ 10 ] in file:line
2013-10-08 11:52:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:52:49 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/home could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-08 11:52:49 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/home')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/home', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\home.php(8): Kohana_View::factory('pages/home')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-08 20:28:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\users.php [ 149 ] in file:line
2013-10-08 20:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 20:29:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH\classes\Controller\users.php [ 156 ] in file:line
2013-10-08 20:29:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 20:29:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH\classes\Controller\users.php [ 151 ] in file:line
2013-10-08 20:29:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 20:36:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\users\signup.php [ 11 ] in file:line
2013-10-08 20:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 21:10:09 --- CRITICAL: ReflectionException [ 0 ]: Function username_available() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:396
2013-10-08 21:10:09 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('username_availa...')
#1 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#2 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#3 C:\wamp\www\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(Object(Validation))
#4 C:\wamp\www\kohana\application\classes\Controller\users.php(57): Kohana_ORM->save(Object(Validation))
#5 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana\system\classes\Kohana\Validation.php:396