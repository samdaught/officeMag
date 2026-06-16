<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;

$this->title = 'Блок-схема';
$this->params['meta_description'] = 'Страница с тёмной блок-схемой и связанными карточками.';
$this->registerCssFile('@web/css/scheme.css', ['depends' => [AppAsset::class]]);
?>

<section class="scheme-page" aria-labelledby="scheme-title">
    <div class="scheme-canvas">
        <h1 id="scheme-title">Масоны Самсона</h1>

        <svg class="scheme-lines" viewBox="0 0 986 762" aria-hidden="true" focusable="false">
            <defs>
                <marker id="scheme-arrow" viewBox="0 0 8 8" refX="7" refY="4" markerWidth="8" markerHeight="8" orient="auto">
                    <path d="M1 1 7 4 1 7" fill="none" stroke="currentColor" stroke-width="1.1" />
                </marker>
            </defs>

            <path class="scheme-line" d="M743 116 H224" marker-end="url(#scheme-arrow)" />
            <path class="scheme-line" d="M723 116 V188 H743" />
            <path class="scheme-line" d="M743 259 H344" marker-end="url(#scheme-arrow)" />
            <path class="scheme-line" d="M123 720 V138" marker-end="url(#scheme-arrow)" />
            <path class="scheme-line" d="M123 260 H143" />
            <path class="scheme-line" d="M123 659 H143" />
            <path class="scheme-line" d="M123 721 H143" />
            <path class="scheme-line" d="M263 599 H243 V293" marker-end="url(#scheme-arrow)" />
            <path class="scheme-line" d="M243 343 H263" />
            <path class="scheme-line" d="M743 414 H464" marker-end="url(#scheme-arrow)" />
            <path class="scheme-line" d="M723 414 V538 H743" />
            <path class="scheme-line" d="M943 537 H963 V414 H943" marker-end="url(#scheme-arrow)" />
        </svg>

        <div class="scheme-card scheme-card--alliksaar">Алликсаар</div>
        <div class="scheme-card scheme-card--du-hast">Ду Хаст<br>Вячеславович</div>
        <div class="scheme-card scheme-card--shirinkina">Анастасия Ширинкина</div>
        <div class="scheme-card scheme-card--klitotehnis">Станислав<br>Клитотехнис</div>
        <div class="scheme-card scheme-card--troyan">Александр Троян</div>
        <div class="scheme-card scheme-card--vodolazskaya">Людмила<br>Водолазская</div>
        <div class="scheme-card scheme-card--borgdorf">Ольга Боргдорф</div>
        <div class="scheme-card scheme-card--vozinguy">Дмитрий Возингуй</div>
        <div class="scheme-card scheme-card--boltushkina">Кристина Болтушкина</div>
        <div class="scheme-card scheme-card--visolkin">Максим Висолькин</div>
        <div class="scheme-card scheme-card--brus">Сергей Брус</div>
        <div class="scheme-card scheme-card--zverek">Игорь Зверёк</div>
        <div class="scheme-card scheme-card--stroy">Антон Строй</div>
    </div>
</section>
