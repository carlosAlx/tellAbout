<?php

//use Core\Core;
require 'config.php';
session_start();
define("BASE_URL", "http://localhost/tellAbout/");
spl_autoload_register(function ($class) {
    if (file_exists('Core/' . $class . '.php')) {
        require_once('Core/' . $class . '.php');
    } elseif (file_exists('Controllers/' . $class . '.php')) {
        require_once('Controllers/' . $class . '.php');
    } elseif (file_exists('Model/' . $class . '.php')) {
        require_once('Model/' . $class . '.php');
    }
});

$core = new Core();
$core->run();
