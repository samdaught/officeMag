function TogglePage() {
  return (
    <section className="toggle-page" aria-labelledby="toggle-title">
      <h1 id="toggle-title">Переключатель</h1>
      <label className="power-toggle">
        <input className="power-toggle__input" type="checkbox" aria-label="Переключить состояние" />
        <span className="power-toggle__body" aria-hidden="true">
          <span className="power-toggle__glow" />
          <span className="power-toggle__knob" />
        </span>
      </label>
    </section>
  );
}

export { TogglePage };
