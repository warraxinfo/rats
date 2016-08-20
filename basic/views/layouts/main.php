<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Warrax BFP Rats',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Сайт Warrax BFP', 'url' => ['http://warrax.net/'], 'options'=> ['class'=>'navbar-item'], 'linkOptions'=>['class'=>'navbar-item-a']],
            ['label' => 'Крысы', 'url' => ['/site/index'], 'options'=> ['class'=>'navbar-item'], 'linkOptions'=>['class'=>'navbar-item-a']],
            ['label' => 'Инфо', 'url' => ['/site/about'], 'options'=> ['class'=>'navbar-item'], 'linkOptions'=>['class'=>'navbar-item-a']],
            ['label' => 'Контакт', 'url' => ['/site/contact'], 'options'=> ['class'=>'navbar-item'], 'linkOptions'=>['class'=>'navbar-item-a']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login'], 'options'=> ['class'=>'navbar-item'], 'linkOptions'=>['class'=>'navbar-item-a']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Warrax Black Fire Pandemonium <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
