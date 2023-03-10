<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Laminas\Db\Adapter;

return [
    'service_manager' => [
        'abstract_factories' => [
            Adapter\AdapterAbstractServiceFactory::class
        ],
        'factories' => [
            Adapter\AdapterInterface::class => Adapter\AdapterServiceFactory::class
        ],
        'aliases' => [
            Adapter\Adapter::class => Adapter\AdapterInterface::class
        ]
    ],
    'db' => [
        'driver' => 'Pgsql',
        'dns' => 'pgsql:dbname=quiz;hostname=localhost',
        'driver_options' => [
//            PDO::PGSQL_ATT
        ]
    ]
//    'db' => [
//        'driver' => 'Pgsql',
//        'adapters' => [
//            'quiz' => [
//                'driver' => 'Pgsql',
//                'host' => 'localhost',
//                'username' => 'quiz',
//                'dbname' => 'quiz',
//                'port' => '5432',
//            ],
//        ],
//    ],
];
