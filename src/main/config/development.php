<?php
use yii\helpers\BaseArrayHelper;

$config = BaseArrayHelper::merge(
    require(dirname(__FILE__) . '/common.php'), [
    'bootstrap' => ['debug'],
    'components' => [
        'cache' => [
            'class'=>'yii\caching\DbCache',
            'db'=>'db',
            'cacheTable'=>'cache',
        ],
    ],
    'modules' => [
        'debug' => 'yii\debug\Module',
    ],
    'params' => [],
]);

return $config;