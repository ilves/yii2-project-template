<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' =>  'mysql:host='._getenv('MYSQL_DB_HOST', 'localhost')
        .';port='._getenv('MYSQL_DB_PORT', 3306)
        .';dbname='._getenv('MYSQL_DB_NAME','golive'),
    'username' =>  _getenv('MYSQL_USERNAME', 'root'),
    'password' =>  _getenv('MYSQL_PASSWORD', ''),
    'emulatePrepare' => true,
    'charset' => 'utf8',
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 3600,
];