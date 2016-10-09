<?php
header('P3P: CP="CAO PSA OUR"');

if (isset($_SERVER['HTTP_X_FORWARDED_PORT'])) {
	$_SERVER['SERVER_PORT'] = $_SERVER['HTTP_X_FORWARDED_PORT'];
}

if (isset($_SERVER['HTTP_X_REAL_IP'])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_REAL_IP'];
}

if (isset($_SERVER['X-Forwarded-For'])) {
    $ip = explode(',', $_SERVER['X-Forwarded-For']);
    $_SERVER['REMOTE_ADDR'] = $ip[0];
}

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = $ip[0];
}

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// Local server
if (isset($_SERVER['HTTP_HOST']) && stristr($_SERVER['HTTP_HOST'], 'localhost')) {
    $config = require(__DIR__ . '/../src/main/config/development.php');
	defined('YII_DEBUG') or define('YII_DEBUG', true);
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
} else {
    $config = require(__DIR__ . '/../src/main/config/production.php');
	defined('YII_DEBUG') or define('YII_DEBUG', false);
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 0);
}

(new yii\web\Application($config))->run();