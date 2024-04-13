<?php
use EasyMvc\Layout\Template;
return [
    'config' => [
        'view' => [
            'path' => __DIR__.'/../../view/' 
        ]
    ],
    Template::class => function($container){
        $pathview = $container->get('config')['view']['path'];
        return new Template(
            $pathview
        );
    }
];