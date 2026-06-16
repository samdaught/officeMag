function ToolButtons({ live = false }) {
  const tools = [
    ['edit', 'Редактировать'],
    ['export', 'Выгрузить в Excel'],
    ['delete', 'Удалить список'],
    ['print', 'Распечатать'],
    ['upload', 'Загрузить из файла']
  ];

  return (
    <div className={`buttons-tools${live ? ' buttons-tools--live' : ''}`} aria-label="Действия со списком">
      {tools.map(([icon, label]) => (
        <button key={icon} className="tool-button" type="button">
          <span className={`tool-button__icon tool-button__icon--${icon}`} aria-hidden="true" />
          <span>{label}</span>
        </button>
      ))}
    </div>
  );
}

export { ToolButtons };
