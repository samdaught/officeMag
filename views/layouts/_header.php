<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

$items = [
    [
        'label' => 'Текст',
        'url' => ['/yii2/text'],
    ],
    [
        'label' => 'Форма',
        'url' => ['/yii2/form'],
    ],
    [
        'label' => 'Кнопки',
        'url' => ['/yii2/buttons'],
    ],
    [
        'label' => 'Схема',
        'url' => ['/yii2/scheme'],
    ],
    [
        'label' => 'Витрина',
        'url' => ['/yii2/slider'],
    ],
    [
        'label' => 'Переключатель',
        'url' => ['/yii2/toggle'],
    ],
    [
        'label' => 'Красивая кнопка',
        'url' => ['/yii2/beauty'],
    ],
    [
        'label' => 'Чёрная страница',
        'url' => ['/yii2/black-page'],
    ],
];

?>

<header id="header">
    <?php NavBar::begin(
        [
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-dark office-header'],
            'innerContainerOptions' => ['class' => 'office-header__inner'],
        ],
    ) ?>
    <?= Nav::widget(
        [
            'options' => ['class' => 'navbar-nav ms-auto'],
            'encodeLabels' => false,
            'items' => $items,
        ],
    ) ?>
    <?php NavBar::end() ?>
</header>
