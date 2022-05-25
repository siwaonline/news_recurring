<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News recurring',
    'description' => 'Recurring news',
    'category' => 'fe',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '3.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'news' => '9.0.0-9.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'suggests' => [],
];
