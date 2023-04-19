<?php
define('DIR_ROOT', __DIR__);
$web_root = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://').$_SERVER['HTTP_HOST'];

require_once 'config/app.php';
require_once 'config/routes.php';
require_once 'core/import.php';
require_once 'app/App.php';
