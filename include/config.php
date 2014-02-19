<?php
//Paths for various directories.
define('SITE_ROOT', dirname(dirname(__FILE__)));

define('PRESENTATION_DIR', SITE_ROOT.'/presentation/');
define('BUSINESS_DIR', SITE_ROOT.'/business/');

define('SMARTY_DIR', SITE_ROOT.'/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR.'templates');
define('COMPILE_DIR', PRESENTATION_DIR.'templates_c');
define('CONFIG_DIR', SITE_ROOT.'/include/configs');

//Error handling parametres
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);
define('ERROR_TYPES', E_ERROR);

//Error logging parametres
define('LOG_ERRORS', true);
define('LOG_ERROR_FILE', '');
define('SITE_GENERIC_ERROR_MESSAGE', '<h1> Site: An Error Occured </h1>');

//Mailing system parametres
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'zeekisfreak@gmail.com');
define('SEND_FROM', 'report@stampsource.com');

//Database Parametres
define('DB_PERSISTENCY', true);
define('DB_SERVER', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'stampsource');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

//Link factory parametres
define('HTTP_SERVER_PORT', '80');
define('VIRTUAL_LOCATION', '/stampsource/');






?>