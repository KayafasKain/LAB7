<?php
return [
    "SiteName" => "My simple mvc framework",
    "DefaultRoute" => "site/index",
    "Author" => "Andrey Maksiuta",
    "components" => [
        "twig" => [
            "cache_path" => "./../core/Templates/cache",
            "template_path" => "./../core/Templates",
        ],
        "db"=>[
            'driver' => 'mysql',
            'host' => 'localhost:3307',
            'database' => 'web_lab',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
    ],
];

