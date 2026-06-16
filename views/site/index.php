<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;

$this->title = 'ОфисМаг: тестовое задание';
$this->params['meta_description'] = 'Тестовое задание на фронтенд-позицию: HTML, CSS, JavaScript, Yii2 и React.';
$this->params['meta_keywords'] = 'ОфисМаг, фронтенд, HTML, CSS, JavaScript, React, тестовое задание';
$this->registerCssFile('@web/css/home.css', ['depends' => [AppAsset::class]]);
?>

<section class="hero-banner" aria-labelledby="hero-title">
    <div class="hero-banner__content">

        <h1 id="hero-title" class="hero-banner__title">
            Тестовое задание для ОфисМаг
        </h1>
        <ul class="hero-banner__highlights" aria-label="Что показывает проект">
            <li>Yii2-версия: чистая вёрстка, стили и интерактивность без UI-фреймворка</li>
            <li>React-версия: те же страницы, собранные из компонентов</li>
            <li>Общий стиль: одинаковые страницы, изображения и поведение в обеих версиях</li>
        </ul>

        <div class="hero-banner__actions" aria-label="Выбор реализации">
            <?= Html::a(
                'Yii2-версия',
                '/yii2/text',
                [
                    'class' => 'btn btn-primary btn-lg hero-banner__button',
                    'rel' => 'noopener',
                ],
            ) ?>

            <?= Html::a(
                'React-версия',
                '/react',
                [
                    'class' => 'btn btn-outline-dark btn-lg hero-banner__button',
                    'rel' => 'noopener',
                ],
            ) ?>
        </div>
    </div>
</section>
