<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;

$this->title = 'Офисмаг тестовое задание';
$this->params['meta_description'] = 'Тестовое задание на frontend-позицию: самописный HTML, CSS, JavaScript и React-компоненты.';
$this->params['meta_keywords'] = 'офисмаг, frontend, html, css, javascript, react, тестовое задание';
$this->registerCssFile('@web/css/home.css', ['depends' => [AppAsset::class]]);
?>

<section class="hero-banner" aria-labelledby="hero-title">
    <div class="hero-banner__content">

        <h1 id="hero-title" class="hero-banner__title">
            Тестовое задание для Офисмаг
        </h1>
        <ul class="hero-banner__highlights" aria-label="Что показывает проект">
            <li>Vanilla: чистая верстка, стили и интерактивность без UI-фреймворка</li>
            <li>React: реализация на компонентах и управляемом состоянии</li>
            <li>Yii2/PHP: вспомогательная интеграция для демонстрации серверного контекста</li>
        </ul>

        <div class="hero-banner__actions" aria-label="Выбор реализации">
            <?= Html::a(
                'Смотреть vanilla',
                '/yii2/index',
                [
                    'class' => 'btn btn-primary btn-lg hero-banner__button',
                    'rel' => 'noopener',
                ],
            ) ?>

            <?= Html::a(
                'React-версия',
                '#',
                [
                    'class' => 'btn btn-outline-dark btn-lg hero-banner__button',
                    'rel' => 'noopener',
                ],
            ) ?>
        </div>
    </div>
</section>
