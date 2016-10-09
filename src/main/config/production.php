<?php
use yii\helpers\BaseArrayHelper;

$config = BaseArrayHelper::merge(
    require(dirname(__FILE__) . '/common.php'), [
    'components' => [
        'cache'=> [
            'class'=>'yii\caching\DbCache',
            'db'=>'db',
            'cacheTable'=>'cache',
        ],
        'db' => $db,
    ],
    'params' => [],
]);

return $config;