<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-19 21:56:18 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Tuxi' for key 'uniq_username' [ UPDATE `users` SET `username` = 'Tuxi' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-19 21:56:18 --- DEBUG: #0 C:\wamp\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
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