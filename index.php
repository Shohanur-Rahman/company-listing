<?php
use App\Classes\Config\Config;
require_once('init.php');

/*$dataTest = \App\Classes\Config\DB::getInstance()
    ->update('test_table',3,
        array(
            'first_name' => 'Bari Ja',
            'last_name' => 'Khoi Muri'
        ));*/

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

