<?php

########################################################################
# Extension Manager/Repository config file for ext "base_cache".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cache Interface',
    'description' => 'Common interfaces for simple caching psr/simple-cache.',
    'category' => 'misc',
    'version' => '0.0.3',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.3.99',
            'typo3' => '6.2.0-9.5.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
