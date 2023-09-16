<?php


require_once(__DIR__ . '/Core/functions.php');
session_start();
spl_autoload_register(function ($Name) {
    require_once(__DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $Name) . '.php');
});

$Router = new Core\Router();
$Router->GetRoute();


