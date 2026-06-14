<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;

$this->title = 'Демонстрационный текстовый блок';
$this->params['meta_description'] = 'Демонстрационный текстовый блок с разнообразной семантической разметкой.';
$this->registerCssFile('@web/css/text-showcase.css', ['depends' => [AppAsset::class]]);
?>

<article class="content-showcase" aria-labelledby="content-showcase-title">
    <header class="content-showcase__header">
        <p class="content-showcase__kicker">Vanilla HTML, CSS, JavaScript</p>
        <h1 id="content-showcase-title">Карточка интерфейсного решения для каталога офисных товаров</h1>
        <p class="content-showcase__lead">
            Этот блок имитирует фрагмент продуктовой документации: в нем собраны текст,
            навигация, таблица, списки, цитата, примечания и интерактивные раскрывающиеся
            детали. Разметка остается прикладной, поэтому элементы работают на смысл, а не
            просто демонстрируют наличие разных тегов.
        </p>

        <nav class="content-showcase__toc" aria-label="Навигация по текстовому блоку">
            <a href="#goal">Цель</a>
            <a href="#structure">Структура</a>
            <a href="#metrics">Метрики</a>
            <a href="#notes">Примечания</a>
        </nav>
    </header>

    <section id="goal" class="content-showcase__section">
        <h2>Цель блока</h2>
        <p>
            Представим, что команда запускает обновленную страницу категории
            <strong>канцелярских товаров</strong>. Пользователь должен быстро понять,
            какие позиции есть в наличии, чем отличаются предложения и какое действие
            требуется дальше. Для этого в интерфейсе важны <em>иерархия текста</em>,
            аккуратные акценты и предсказуемые состояния.
        </p>

        <p>
            В верстке используются сокращения вроде <abbr title="User Interface">UI</abbr>,
            inline-код <code>data-state="ready"</code>, клавиатурные подсказки
            <kbd>Tab</kbd> и <kbd>Enter</kbd>, а также выделение
            <mark>критически важной информации</mark> без перегруза визуального слоя.
        </p>

        <blockquote cite="https://html.spec.whatwg.org/">
            <p>
                Хорошая семантика помогает интерфейсу оставаться понятным для браузера,
                поисковых систем, скринридеров и самого разработчика через несколько недель.
            </p>
            <footer>Заметка из рабочего ревью разметки</footer>
        </blockquote>
    </section>

    <section id="structure" class="content-showcase__section content-showcase__grid">
        <div>
            <h2>Структура сценария</h2>
            <ol>
                <li>Пользователь открывает подборку и сканирует заголовок.</li>
                <li>Фильтрует товары по наличию, цене и назначению.</li>
                <li>Сравнивает предложения в таблице характеристик.</li>
                <li>Переходит к форме заявки или сохраняет подборку.</li>
            </ol>
        </div>

        <aside class="content-showcase__aside" aria-label="Короткая сводка">
            <h3>Сводка</h3>
            <dl>
                <div>
                    <dt>Формат</dt>
                    <dd>Самописная верстка</dd>
                </div>
                <div>
                    <dt>Состояние</dt>
                    <dd><span class="content-showcase__status">Готово к проверке</span></dd>
                </div>
                <div>
                    <dt>Дата</dt>
                    <dd><time datetime="2026-06-13">13 июня 2026</time></dd>
                </div>
            </dl>
        </aside>
    </section>

    <section id="metrics" class="content-showcase__section">
        <h2>Сравнение элементов интерфейса</h2>
        <p>
            Таблица ниже показывает, как один и тот же контент можно оценивать с точки зрения
            пользы для пользователя. Значение <var>priority</var> помогает решить, что должно
            быть видно без дополнительного клика.
        </p>

        <div class="content-showcase__table-wrap">
            <table>
                <caption>Приоритеты контента для страницы категории</caption>
                <thead>
                    <tr>
                        <th scope="col">Элемент</th>
                        <th scope="col">Назначение</th>
                        <th scope="col">Приоритет</th>
                        <th scope="col">Состояние</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Заголовок</th>
                        <td>Объясняет, где находится пользователь</td>
                        <td>Высокий</td>
                        <td><meter min="0" max="100" value="92">92%</meter></td>
                    </tr>
                    <tr>
                        <th scope="row">Фильтры</th>
                        <td>Сокращают путь до нужного товара</td>
                        <td>Высокий</td>
                        <td><meter min="0" max="100" value="86">86%</meter></td>
                    </tr>
                    <tr>
                        <th scope="row">Подсказки</th>
                        <td>Помогают без отдельной инструкции</td>
                        <td>Средний</td>
                        <td><meter min="0" max="100" value="64">64%</meter></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="notes" class="content-showcase__section content-showcase__split">
        <div>
            <h2>Примечания к реализации</h2>
            <ul>
                <li>Ссылки имеют понятный текст и остаются различимыми в тексте.</li>
                <li>Списки используются там, где порядок или группировка действительно важны.</li>
                <li>Таблица содержит <code>caption</code>, заголовки и корректные области <code>scope</code>.</li>
                <li>Интерактивные элементы доступны с клавиатуры без дополнительного JavaScript.</li>
            </ul>
        </div>

        <figure class="content-showcase__figure">
            <pre><code>&lt;button type="button" data-state="ready"&gt;
    Добавить в подборку
&lt;/button&gt;</code></pre>
            <figcaption>Минимальный пример состояния элемента управления.</figcaption>
        </figure>
    </section>

    <details class="content-showcase__details">
        <summary>Почему это выглядит как единый блок?</summary>
        <p>
            Все элементы относятся к одному сценарию: описанию интерфейсного решения для
            каталога. Поэтому даже разные теги, от таблицы до цитаты, воспринимаются как
            части одной страницы, а не как искусственный набор примеров.
        </p>
    </details>

    <footer class="content-showcase__footer">
        <address>
            Подготовлено для тестового задания Офисмаг.
            <?= Html::a('Вернуться на главную', ['/site/index']) ?>.
        </address>
        <small>Прогресс оформления блока: <progress max="100" value="100">100%</progress></small>
    </footer>
</article>
