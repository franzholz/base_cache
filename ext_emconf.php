<?php

########################################################################
# Extension Manager/Repository config file for ext "base_cache".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cache Interface',
    'description' => 'Common interfaces for simple caching psr/simple-cache.',
    'category' => 'misc',
    'version' => '3.0.2',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '8.0.0-8.99.99',
            'typo3' => '11.5.0-13.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
