<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'CleverReach',
    'description' => 'Finishers and validators for EXT:form and Powermail',
    'category' => 'misc',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Wappler',
    'author_email' => 'typo3YYYY@wappler.systems',
    'author_company' => 'WapplerSystems',
    'version' => '0.1.7',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.5.99',
            'php' => '7.0.0-7.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
