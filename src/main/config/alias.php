<?php

function _getenv($key, $default) {
    $value = getenv($key);
    return $value !== false ? $value : $default;
}

Yii::setAlias('main', dirname(dirname(__DIR__))."/main");