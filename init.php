<?php

session_start();
function getBaseURL(){
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
    );
}
$ASSETS_URL = getBaseURL().'/oop/public/assets/';

$GLOBALS['APP_NAME'] = 'Company Listing';
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'company_listing'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    )
);
require 'vendor/autoload.php'; // It must be called first

use App\Classes\Config\Config;
use App\Classes\Config\DB;
use \App\Classes\Config\Input;
use \App\Classes\Config\Validation;

require_once('public/functions/sanitize.php');
