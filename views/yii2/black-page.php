<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;

$this->title = 'Pineapplepen — скоро открытие';
$this->params['meta_description'] = 'Чёрная страница Pineapplepen с адаптивным фоном.';
$this->registerCssFile('@web/css/black-page.css', ['depends' => [AppAsset::class]]);
?>

<section class="black-page" aria-labelledby="black-page-title">
    <picture class="black-page__media">
        <source
            type="image/webp"
            srcset="/images/black-page/pineapplepen-768.webp 768w, /images/black-page/pineapplepen-1280.webp 1280w, /images/black-page/pineapplepen-1920.webp 1920w"
            sizes="100vw"
        >
        <source
            type="image/jpeg"
            srcset="/images/black-page/pineapplepen-768.jpg 768w, /images/black-page/pineapplepen-1280.jpg 1280w, /images/black-page/pineapplepen-1920.jpg 1920w"
            sizes="100vw"
        >
        <img
            src="/images/black-page/pineapplepen-1280.jpg"
            width="1280"
            height="652"
            alt="Силуэт человека в поле на закате"
            decoding="async"
            fetchpriority="high"
        >
    </picture>

    <div class="black-page__content">
        <h1 id="black-page-title">Pineapplepen</h1>
        <p>
            Вам нужно будет постараться, чтобы забыть то, что вы здесь увидите.
        </p>
    </div>

    <footer class="black-page__footer">
        <p>Невероятный личный опыт и восхитительное удовольствие.</p>
        <a href="#black-page-title">Pineapplepen</a>
    </footer>
</section>
