<?php

/**
 * Extension Manager/Repository config file for ext "autohaus".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'autohaus',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Autohaus\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Elena Wulz',
    'author_email' => 's2310456036@fhooe.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
