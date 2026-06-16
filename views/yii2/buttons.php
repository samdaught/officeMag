<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;

$this->title = 'Состояния кнопок';
$this->params['meta_description'] = 'Страница с вариантами кнопок в обычном, наведенном, активном и неактивном состоянии.';
$this->registerCssFile('@web/css/buttons.css', ['depends' => [AppAsset::class]]);
?>

<section class="buttons-page" aria-labelledby="buttons-live-title">
    <?php
    $variants = [
        'gray' => 'Просмотреть',
        'outline-red' => 'Просмотреть',
        'red' => 'Просмотреть',
        'split' => 'Просмотреть',
        'green' => 'Просмотреть',
        'outline-green' => 'Просмотреть',
    ];
    ?>

    <div class="buttons-live" aria-labelledby="buttons-live-title">
        <h1 id="buttons-live-title">Рабочие варианты</h1>

        <div class="buttons-live__row">
            <?php foreach ($variants as $variant => $label): ?>
                <button class="ui-button ui-button--<?= $variant ?>" type="button">
                    <span><?= $label ?></span>
                    <?php if ($variant === 'split'): ?>
                        <span class="ui-button__arrow" aria-hidden="true"></span>
                    <?php endif ?>
                </button>
            <?php endforeach ?>
        </div>

        <div class="buttons-live__row">
            <?php foreach ($variants as $variant => $label): ?>
                <button class="ui-button ui-button--<?= $variant ?>" type="button" disabled>
                    <span><?= $label ?></span>
                    <?php if ($variant === 'split'): ?>
                        <span class="ui-button__arrow" aria-hidden="true"></span>
                    <?php endif ?>
                </button>
            <?php endforeach ?>
        </div>

        <div class="buttons-tools buttons-tools--live" aria-label="Рабочие действия со списком">
            <button class="tool-button" type="button">
                <span class="tool-button__icon tool-button__icon--edit" aria-hidden="true"></span>
                <span>Редактировать</span>
            </button>
            <button class="tool-button" type="button">
                <span class="tool-button__icon tool-button__icon--export" aria-hidden="true"></span>
                <span>Выгрузить в Excel</span>
            </button>
            <button class="tool-button" type="button">
                <span class="tool-button__icon tool-button__icon--delete" aria-hidden="true"></span>
                <span>Удалить список</span>
            </button>
            <button class="tool-button" type="button">
                <span class="tool-button__icon tool-button__icon--print" aria-hidden="true"></span>
                <span>Распечатать</span>
            </button>
            <button class="tool-button" type="button">
                <span class="tool-button__icon tool-button__icon--upload" aria-hidden="true"></span>
                <span>Загрузить из файла</span>
            </button>
        </div>
    </div>
</section>
