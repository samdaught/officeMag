import { Slider } from '../components/slider/Slider.jsx';

function SliderPage() {
  return (
    <section className="slider-page" aria-labelledby="slider-title">
      <header className="slider-page__header">
        <h1 id="slider-title">Витрина и слайдер</h1>
        <p>Одна и та же товарная лента: сначала прокрутка через ползунок, затем прокрутка свайпом или перетаскиванием мышью.</p>
      </header>
      <section className="slider-section" aria-labelledby="slider-scroll-title">
        <h2 id="slider-scroll-title">Прокрутка через ползунок</h2>
        <Slider />
      </section>
      <section className="slider-section" aria-labelledby="slider-drag-title">
        <h2 id="slider-drag-title">Перетаскивание и свайп</h2>
        <Slider drag />
      </section>
    </section>
  );
}

export { SliderPage };
