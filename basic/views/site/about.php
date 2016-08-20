<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Данная страница - Портал Крысаков Warrax BFP.
        Для администраторов доступны редактирование, добавление и удаление записей, фотографий и событий о крысах.
        Для пользователей доступен просмотр фотографий и данных о крысах.
    </p>
</div>
