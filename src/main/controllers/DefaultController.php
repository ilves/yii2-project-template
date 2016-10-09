<?php

namespace main\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '@main/views/layouts/main';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}