<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 19:41:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\users.php [ 9 ] in file:line
2013-10-06 19:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 21:21:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\website.php [ 32 ] in file:line
2013-10-06 21:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 21:21:41 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template.php [ 4 ] in file:line
2013-10-06 21:21:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 23:38:28 --- CRITICAL: View_Exception [ 0 ]: The requested view users/signup could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-10-06 23:38:28 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('users/signup')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('users/signup', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\users.php(27): Kohana_View::factory('users/signup')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137