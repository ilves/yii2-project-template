<?php
use main\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?php
    NavBar::begin(['brandLabel' => Yii::$app->name, 'options' => ['class' => 'navbar-fixed-top navbar-inverse']]);
    echo Nav::widget([
        'items' => [
           ['label' => 'Home', 'url' => ['/default/index']],
        ],
        'options' => ['class' => 'navbar-nav'],
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
    <div class="container">
        <hr />
        <footer>
            <p>&copy; 2016</p>
        </footer>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>