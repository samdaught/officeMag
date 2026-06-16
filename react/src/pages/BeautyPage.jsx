function BeautyPage() {
  return (
    <section className="beauty-page" aria-labelledby="react-beauty-title">
      <div className="beauty-live" aria-labelledby="react-beauty-title">
        <h1 id="react-beauty-title">Рабочая кнопка</h1>
        <div className="beauty-live__actions">
          <button className="beauty-button beauty-button--live" type="button">Кнопка</button>
          <button className="beauty-button beauty-button--live" type="button" disabled>Кнопка</button>
        </div>
      </div>
    </section>
  );
}

export { BeautyPage };
