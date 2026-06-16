<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;

$this->title = 'Витрина и слайдер';
$this->params['meta_description'] = 'Страница с товарной витриной: прокрутка через ползунок, перетаскивание и свайп.';
$this->registerCssFile('@web/css/slider.css', ['depends' => [AppAsset::class]]);
$this->registerJsFile('@web/js/slider.js', ['depends' => [AppAsset::class]]);

$products = [
    [
        'image' => 'bestar.webp',
        'title' => 'Набор настольный BESTAR «Аментор» из дерева, 8 предметов, двойной лоток, светлая вишня',
    ],
    [
        'image' => 'bestar.webp',
        'title' => 'Набор настольный BESTAR «Снапон» из дерева, 7 предметов, двойной лоток, красное дерево',
    ],
    [
        'image' => 'bestar.webp',
        'title' => 'Набор настольный BESTAR «Снапон» из дерева, 7 предметов, двойной лоток, орех',
    ],
    [
        'image' => 'bestar.webp',
        'title' => 'Набор настольный BESTAR «Негслес» из дерева, 5 предметов, двойной лоток, красное дерево',
    ],
    [
        'image' => 'bestar.webp',
        'title' => 'Набор настольный BESTAR «Кабинет» из дерева, 6 предметов, настольная подставка, орех',
    ],
    [
        'image' => 'bestar.webp',
        'title' => 'Набор настольный BESTAR «Премьер» из дерева, 8 предметов, красное дерево',
    ],
];
?>

<section class="slider-page" aria-labelledby="slider-title">
    <header class="slider-page__header">
        <h1 id="slider-title">Витрина и слайдер</h1>
        <p>Одна и та же товарная лента: сначала прокрутка через ползунок, затем прокрутка свайпом или перетаскиванием мышью.</p>
    </header>

    <section class="slider-section" aria-labelledby="slider-scroll-title">
        <h2 id="slider-scroll-title">Прокрутка через ползунок</h2>

        <div class="slider-track" data-slider>
            <div class="slider-track__list" data-slider-track tabindex="0" aria-label="Товары">
                <?php foreach ($products as $product): ?>
                    <article class="product-card">
                        <?= Html::img('@web/images/showcase/' . $product['image'], [
                            'class' => 'product-card__image',
                            'alt' => $product['title'],
                            'draggable' => 'false',
                        ]) ?>
                        <h3><?= Html::encode($product['title']) ?></h3>
                    </article>
                <?php endforeach ?>
            </div>

            <div class="slider-scrollbar" data-slider-scrollbar aria-hidden="true">
                <span data-slider-thumb></span>
            </div>
        </div>
    </section>

    <section class="slider-section" aria-labelledby="slider-drag-title">
        <h2 id="slider-drag-title">Перетаскивание и свайп</h2>

        <div class="slider-track" data-slider data-slider-drag>
            <div class="slider-track__list slider-track__list--drag" data-slider-track tabindex="0" aria-label="Товары">
                <?php foreach ($products as $product): ?>
                    <article class="product-card">
                        <?= Html::img('@web/images/showcase/' . $product['image'], [
                            'class' => 'product-card__image',
                            'alt' => $product['title'],
                            'draggable' => 'false',
                        ]) ?>
                        <h3><?= Html::encode($product['title']) ?></h3>
                    </article>
                <?php endforeach ?>
            </div>

            <div class="slider-scrollbar" data-slider-scrollbar aria-hidden="true">
                <span data-slider-thumb></span>
            </div>
        </div>
    </section>
</section>
