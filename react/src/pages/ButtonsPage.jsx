import { ToolButtons } from '../components/buttons/ToolButtons.jsx';
import { UiButton } from '../components/buttons/UiButton.jsx';

function ButtonsPage() {
  const variants = ['gray', 'outline-red', 'red', 'split', 'green', 'outline-green'];

  return (
    <section className="buttons-page" aria-labelledby="buttons-live-title">
      <div className="buttons-live" aria-labelledby="buttons-live-title">
        <h1 id="buttons-live-title">Рабочие варианты</h1>
        <div className="buttons-live__row">{variants.map((variant) => <UiButton key={variant} variant={variant} />)}</div>
        <div className="buttons-live__row">{variants.map((variant) => <UiButton key={variant} variant={variant} disabled />)}</div>
        <ToolButtons live />
      </div>
    </section>
  );
}

export { ButtonsPage };
