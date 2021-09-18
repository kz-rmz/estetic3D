<?php
// HTTP
define('HTTP_SERVER', 'https://estetic3d.kz/');

// HTTPS
define('HTTPS_SERVER', 'https://estetic3d.kz/');

// DIR
define('DIR_APPLICATION', '/var/www/vhosts/estetic3d.kz/httpdocs/catalog/');
define('DIR_SYSTEM', '/var/www/vhosts/estetic3d.kz/httpdocs/system/');
define('DIR_IMAGE', '/var/www/vhosts/estetic3d.kz/httpdocs/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'p-322405_admin');
define('DB_PASSWORD', 'f*433arJ');
define('DB_DATABASE', 'p-322405_esteic3d');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');