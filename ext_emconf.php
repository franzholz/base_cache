<?php

########################################################################
# Extension Manager/Repository config file for ext "base_cache".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Cache Interface',
    'description' => 'Common interfaces for simple caching.',
    'category' => 'misc',
    'shy' => 0,
    'version' => '0.0.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'php' => '5.4.0-7.0.99',
            'typo3' => '6.2.0-9.3.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
