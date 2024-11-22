<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!defined('APP_VERSION'))
{
	define('APP_VERSION', '1.17.0');
	define('APP_INDEX_ROOT_FILE', __FILE__);
	define('APP_INDEX_ROOT_PATH', str_replace('\\', '/', rtrim(dirname(__FILE__), '\\/').'/'));
}

if (file_exists(APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php'))
{
	include APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php';
}
else
{
	echo '[105] Missing version directory';
	exit(105);
}
