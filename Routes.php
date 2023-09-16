<?php


return [
    [
        "url" => "/",
        "name" => "site",
        'controller' => \Controllers\Site::class,
        'method' => 'login'
    ],
    [
        "url" => "/site",
        "name" => "site",
        'controller' => \Controllers\Site::class,
        'method' => 'login'
    ],
    [
        "url" => "/site/login",
        "name" => "login",
        'controller' => \Controllers\Site::class,
        'method' => 'login'
    ],
    [
        "url" => "/site/signup",
        "name" => "signup",
        'controller' => \Controllers\Site::class,
        'method' => 'signup'
    ],
    [
        "url" => "/news",
        "name" => "news",
        'controller' => \Controllers\News::class,
        'method' => 'index'
    ],
    [
        "url" => "site/logout",
        "name" => "logout",
        'controller' => \Controllers\Site::class,
        'method' => 'logout'
    ],
    [
        "url" => "news/getnews",
        "name" => "getnews",
        'controller' => \Controllers\News::class,
        'method' => 'getnews'
    ],
    [
        "url" => "rest/index",
        "name" => "rest",
        'controller' => \Controllers\Rest::class,
        'method' => 'index'
    ],
];