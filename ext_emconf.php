<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'list_type_migration',
    'description' => 'List type to CType migration, backward compatible for TYPO3 v11 and v12',
    'constraints' => [
        'depends' => [
            'typo3' => '11.4.0-13.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Linawolf\\ListTypeMigration\\' => 'Classes/',
        ],
    ],
];
