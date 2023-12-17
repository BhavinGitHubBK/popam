<?php
return [
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '98uHqOpXSxzhl9eCo2pYm6nWay4gNkol'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'efc_'
            ],
            'page_cache' => [
                'id_prefix' => 'efc_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'backend' => [
        'frontName' => 'admin_1m1fzg'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'crypt' => [
        'key' => '0ce221d6e873519ecdb12ee448b247b7'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'popam_magento',
                'username' => 'popam_user',
                'password' => 'Harold@siby2023',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'beta.popam.com'
    ],
    'install' => [
        'date' => 'Tue, 22 Aug 2023 07:08:57 +0000'
    ]
];
