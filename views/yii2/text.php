<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;

$this->title = 'Заголовок';
$this->params['meta_description'] = 'Съешь ещё этих мягких французских булок, да выпей чаю.';
$this->registerCssFile('@web/css/text.css', ['depends' => [AppAsset::class]]);
?>

<article class="text" aria-labelledby="text-title">
    <header class="text__header">
        <h1 id="text-title">Заголовок</h1>
        <p class="text__lead">
            Съешь ещё этих мягких французских булок, да выпей чаю. Съешь ещё этих сладких вкусных
            французских булочек, да запей тёплым чаем.
        </p>
        <p>
            Съешь ещё этих свежих французских булочек, положи рядом мягкое масло и налей чаю.
            Пусть строка идёт спокойно, без лишней важности и без нарочитого смысла.
        </p>

        <nav class="text__toc" aria-label="Навигация по тексту">
            <a href="#goal">Булочки</a>
            <a href="#structure">Чай</a>
            <a href="#metrics">Стол</a>
            <a href="#notes">Заметка</a>
        </nav>
    </header>

    <section id="goal" class="text__section">
        <h2>Съешь ещё этих булочек</h2>
        <p>
            Съешь ещё этих <strong>мягких французских булок</strong>, да выпей чаю. Положи на блюдце
            ещё пару сладких булочек, достань чашку и не спеши.
        </p>
        <p>
            Для чая нужна <abbr title="Чашка чая">ЧЧ</abbr>, а к ней
            <code>сладкая булочка</code>, когда есть <kbd>Чай</kbd> и <kbd>Булка</kbd>, можно встретить
            <mark>рассвет</mark>.
        </p>

        <blockquote>
            <p>
                Съешь ещё этих сладких вкусных французских булочек, да выпей чаю у открытого окна,
                пока на столе не остались только крошки.
            </p>
            <footer>Записка на кухонном столе</footer>
        </blockquote>
    </section>

    <section id="structure" class="text__section text__grid">
        <div>
            <h2>Ещё немного к чаю</h2>
            <ol>
                <li>Съешь ещё одну мягкую французскую булочку.</li>
                <li>Налей в чашку крепкий тёплый чай.</li>
                <li>Поставь блюдце ближе к краю стола.</li>
                <li>Оставь несколько сладких булочек на потом.</li>
            </ol>
        </div>

        <aside class="text__aside" aria-label="Короткая сводка">
            <h3>На столе</h3>
            <dl>
                <div>
                    <dt>Булочки</dt>
                    <dd>Французские</dd>
                </div>
                <div>
                    <dt>Чай</dt>
                    <dd><span class="text__status">Тёплый</span></dd>
                </div>
                <div>
                    <dt>Время</dt>
                    <dd><time datetime="2026-06-16">после обеда</time></dd>
                </div>
            </dl>
        </aside>
    </section>

    <section id="metrics" class="text__section">
        <h2>Булочки на блюдце</h2>
        <p>
            Съешь ещё этих французских булочек и посмотри, сколько осталось на тарелке. Значение
            <var>сладость</var> меняется от кусочка к кусочку, но чай всё равно остаётся горячим.
        </p>

        <div class="text__table-wrap">
            <table>
                <caption>Сладкие вкусные французские булочки</caption>
                <thead>
                    <tr>
                        <th scope="col">Булочка</th>
                        <th scope="col">Описание</th>
                        <th scope="col">К чаю</th>
                        <th scope="col">Сладость</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Первая</th>
                        <td>Мягкая французская булочка с румяной корочкой</td>
                        <td>Да</td>
                        <td><meter min="0" max="100" value="90">90%</meter></td>
                    </tr>
                    <tr>
                        <th scope="row">Вторая</th>
                        <td>Сладкая булочка с тонким ароматом ванили</td>
                        <td>Да</td>
                        <td><meter min="0" max="100" value="76">76%</meter></td>
                    </tr>
                    <tr>
                        <th scope="row">Третья</th>
                        <td>Вкусная булочка для последней чашки чая</td>
                        <td>Да</td>
                        <td><meter min="0" max="100" value="68">68%</meter></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="notes" class="text__section text__split">
        <div>
            <h2>Крошки и чашки</h2>
            <ul>
                <li>Съешь ещё этих сладких французских булочек.</li>
                <li>Выпей чаю, пока он не остыл.</li>
                <li>Стол содержит <code>блюдце</code>, чашку и области <code>крошки</code>.</li>
                <li>Оставь одну вкусную булочку на вечер.</li>
            </ul>
        </div>

        <figure class="text__figure">
            <pre><code>&lt;button type="button" data-state="ready"&gt;
    Съесть булочку
&lt;/button&gt;</code></pre>
            <figcaption>Съешь ещё этих мягких булочек, да выпей чаю.</figcaption>
        </figure>
    </section>

    <details class="text__details">
        <summary>Съесть ещё одну булочку?</summary>
        <p>
            Съешь ещё этих сладких вкусных французских булочек, да выпей чаю. Если чай остыл,
            налей свежий и пододвинь блюдце ближе.
        </p>
    </details>
</article>
