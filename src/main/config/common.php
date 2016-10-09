<?php

require ('alias.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'golive',
    'timeZone' => 'Europe/Tallinn',
    'basePath' => dirname(dirname(dirname(__DIR__))),
    'name' => 'golive',
    'controllerNamespace' => 'main\controllers',
    'defaultRoute' => 'default/index',
    'viewPath' => '@main/views',
    'bootstrap' => ['log'],
    'components' => [
        'urlManager' => [
            'enableStrictParsing' => false,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller>/<action>/<id:\d+>' => '<controller>/<action>',
                '<controller>/<action>' => '<controller>/<action>',
                '<action>' => 'default/<action>',
            ],
        ],
        'user' => [
            'class' => 'golive\socialkit\facebook\User',
            'identityClass' => 'golive\socialkit\facebook\Contact',
        ],
        'request' => [
            'cookieValidationKey' => 'KEYKEYKEY',
        ],
        'errorHandler' => [
            'errorAction' => 'default/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'modules' => [],
    'params' => [],
];

return $config;