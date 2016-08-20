<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Добро Пожаловать!</h1>

        <p class="lead">Перед вами портал крысаков Warrax BFP</p>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Фото Галлерея</h2>

                <p>Фото галлерея крыс Warrax BFP. Фотографии, видео крыс и их жизни.
                Можно выбрать мозаику из фотографий или просмотр в виде слайдов.
                </p>

                <p><a class="btn btn-default" href="/web/index.php?r=site/gallery/">Фотографии крыс &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Регистр Крыс</h2>

                <p>Здесь можно просмотреть реестр крыс, данные крыс и подробную информацию,
                с возможностью сортировки и фильтрации.</p>

                <p><a class="btn btn-default" href="/web/index.php?r=site/registry/">Регистр крыс &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Новости</h2>

                <p>В данном разделе вы сможете посмотреть серии фотографий, события и предметы о крысах Warrax BFP.
                    А также новости о всём что связано с жизнь крыс Warrax BFP.</p>

                <p><a class="btn btn-default" href="/web/index.php?r=site/news/">Новости о крысах &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
