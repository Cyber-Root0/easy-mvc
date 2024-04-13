<?php
use EasyMVC\Layout\Template;
use EasyMVC\Config\DataProvider;
use EasyMVC\Api\ScopeConfig;
use BrunoAlves\abstractmodel\db\DB;
return [
    'config' => [
        'view' => [
            'path' => __DIR__.'/../../view/' 
        ],
        "scope" => __DIR__.'/../config.json'
    ],
    Template::class => function($container){
        $pathview = $container->get('config')['view']['path'];
        return new Template(
            $pathview
        );
    },
    DataProvider::class => function($container){
        $pathconfig = $container->get('config')['scope'];
        return new DataProvider(
            $pathconfig
        );
    },
    ScopeConfig::class => function($container){
        return $container->get(DataProvider::class);
    },
    PDO::class => function($container){
        $scopeConfig = $container->get(ScopeConfig::class);
        $bdconfig = $scopeConfig->getValue('database.drivers.mysql');
        $dsn = "mysql:host=".$bdconfig['host'].";dbname=".$bdconfig['db'];
        return new PDO(
            $dsn,
            $bdconfig['user'],
            $bdconfig['password']
        );
    },
    DB::class => function($container){
        return new DB(
            $container->get(PDO::class)
        );
    }

];