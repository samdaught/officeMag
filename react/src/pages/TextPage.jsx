import { MetricRow } from '../components/content/MetricRow.jsx';

function TextPage() {
  return (
    <article className="text" aria-labelledby="text-title">
      <header className="text__header">
        <h1 id="text-title">Заголовок</h1>
        <p className="text__lead">
          Съешь ещё этих мягких французских булок, да выпей чаю. Съешь ещё этих сладких вкусных
          французских булочек, да запей тёплым чаем.
        </p>
        <p>
          Съешь ещё этих свежих французских булочек, положи рядом мягкое масло и налей чаю.
          Пусть строка идёт спокойно, без лишней важности и без нарочитого смысла.
        </p>
        <nav className="text__toc" aria-label="Навигация по тексту">
          <a href="#goal">Булочки</a>
          <a href="#structure">Чай</a>
          <a href="#metrics">Стол</a>
          <a href="#notes">Заметка</a>
        </nav>
      </header>

      <section id="goal" className="text__section">
        <h2>Съешь ещё этих булочек</h2>
        <p>
          Съешь ещё этих <strong>мягких французских булок</strong>, да выпей чаю. Положи на блюдце
          ещё пару сладких булочек, достань чашку и не спеши.
        </p>
        <p>
          Для чая нужна <abbr title="Чашка чая">ЧЧ</abbr>, а к ней <code>сладкая булочка</code>,
          когда есть <kbd>Чай</kbd> и <kbd>Булка</kbd>, можно встретить <mark>рассвет</mark>.
        </p>
        <blockquote>
          <p>
            Съешь ещё этих сладких вкусных французских булочек, да выпей чаю у открытого окна,
            пока на столе не остались только крошки.
          </p>
          <footer>Записка на кухонном столе</footer>
        </blockquote>
      </section>

      <section id="structure" className="text__section text__grid">
        <div>
          <h2>Ещё немного к чаю</h2>
          <ol>
            <li>Съешь ещё одну мягкую французскую булочку.</li>
            <li>Налей в чашку крепкий тёплый чай.</li>
            <li>Поставь блюдце ближе к краю стола.</li>
            <li>Оставь несколько сладких булочек на потом.</li>
          </ol>
        </div>

        <aside className="text__aside" aria-label="Короткая сводка">
          <h3>На столе</h3>
          <dl>
            <div>
              <dt>Булочки</dt>
              <dd>Французские</dd>
            </div>
            <div>
              <dt>Чай</dt>
              <dd>
                <span className="text__status">Тёплый</span>
              </dd>
            </div>
            <div>
              <dt>Время</dt>
              <dd>
                <time dateTime="2026-06-16">после обеда</time>
              </dd>
            </div>
          </dl>
        </aside>
      </section>

      <section id="metrics" className="text__section">
        <h2>Булочки на блюдце</h2>
        <p>
          Съешь ещё этих французских булочек и посмотри, сколько осталось на тарелке. Значение
          <var>сладость</var> меняется от кусочка к кусочку, но чай всё равно остаётся горячим.
        </p>
        <div className="text__table-wrap">
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
              <MetricRow
                name="Первая"
                purpose="Мягкая французская булочка с румяной корочкой"
                priority="Да"
                value={90}
              />
              <MetricRow
                name="Вторая"
                purpose="Сладкая булочка с тонким ароматом ванили"
                priority="Да"
                value={76}
              />
              <MetricRow
                name="Третья"
                purpose="Вкусная булочка для последней чашки чая"
                priority="Да"
                value={68}
              />
            </tbody>
          </table>
        </div>
      </section>

      <section id="notes" className="text__section text__split">
        <div>
          <h2>Крошки и чашки</h2>
          <ul>
            <li>Съешь ещё этих сладких французских булочек.</li>
            <li>Выпей чаю, пока он не остыл.</li>
            <li>
              Стол содержит <code>блюдце</code>, чашку и области <code>крошки</code>.
            </li>
            <li>Оставь одну вкусную булочку на вечер.</li>
          </ul>
        </div>
        <figure className="text__figure">
          <pre>
            <code>{'<button type="button" data-state="ready">\n    Съесть булочку\n</button>'}</code>
          </pre>
          <figcaption>Съешь ещё этих мягких булочек, да выпей чаю.</figcaption>
        </figure>
      </section>

      <details className="text__details">
        <summary>Съесть ещё одну булочку?</summary>
        <p>
          Съешь ещё этих сладких вкусных французских булочек, да выпей чаю. Если чай остыл,
          налей свежий и пододвинь блюдце ближе.
        </p>
      </details>
    </article>
  );
}

export { TextPage };
