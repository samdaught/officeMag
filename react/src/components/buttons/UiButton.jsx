function UiButton({ variant, disabled = false }) {
  return (
    <button className={`ui-button ui-button--${variant}`} type="button" disabled={disabled}>
      <span>Просмотреть</span>
      {variant === 'split' && <span className="ui-button__arrow" aria-hidden="true" />}
    </button>
  );
}

export { UiButton };
