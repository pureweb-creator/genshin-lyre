<?php

// Debug mode
error_reporting(E_ALL);
ini_set('display_errors', 'on');
ini_set('log_errors', 'off');
ini_set('error_log', __DIR__.'/debug.log');

session_start();

if (!isset($_SESSION['csrf_token']))
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// Define some important constants
define('SITEURL', $_ENV['SITEURL']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_HOST', $_ENV['DB_HOST']);

// Run Application
App\Core\Router::run();