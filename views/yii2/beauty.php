<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;

$this->title = 'Красивая кнопка';
$this->params['meta_description'] = 'Страница с объёмной синей кнопкой и анимацией нажатия.';
$this->registerCssFile('@web/css/beauty.css', ['depends' => [AppAsset::class]]);
?>

<section class="beauty-page" aria-labelledby="beauty-title">
    <div class="beauty-live" aria-labelledby="beauty-title">
        <h1 id="beauty-title">Рабочая кнопка</h1>
        <div class="beauty-live__actions">
            <button class="beauty-button beauty-button--live" type="button">Кнопка</button>
            <button class="beauty-button beauty-button--live" type="button" disabled>Кнопка</button>
        </div>
    </div>
</section>
