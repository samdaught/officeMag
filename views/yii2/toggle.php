<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;

$this->title = 'Анимированный переключатель';
$this->params['meta_description'] = 'Страница с анимированным переключателем на CSS.';
$this->registerCssFile('@web/css/toggle.css', ['depends' => [AppAsset::class]]);
?>

<section class="toggle-page" aria-labelledby="toggle-title">
    <h1 id="toggle-title">Переключатель</h1>

    <label class="power-toggle">
        <input class="power-toggle__input" type="checkbox" aria-label="Переключить состояние">
        <span class="power-toggle__body" aria-hidden="true">
            <span class="power-toggle__glow"></span>
            <span class="power-toggle__knob"></span>
        </span>
    </label>

</section>
