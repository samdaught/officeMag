import { SchemePath } from '../components/scheme/SchemePath.jsx';

function SchemePage() {
  const cards = [
    ['alliksaar', 'Алликсаар'],
    ['du-hast', <>Ду Хаст<br />Вячеславович</>],
    ['shirinkina', 'Анастасия Ширинкина'],
    ['klitotehnis', <>Станислав<br />Клитотехнис</>],
    ['troyan', 'Александр Троян'],
    ['vodolazskaya', <>Людмила<br />Водолазская</>],
    ['borgdorf', 'Ольга Боргдорф'],
    ['vozinguy', 'Дмитрий Возингуй'],
    ['boltushkina', 'Кристина Болтушкина'],
    ['visolkin', 'Максим Висолькин'],
    ['brus', 'Сергей Брус'],
    ['zverek', 'Игорь Зверёк'],
    ['stroy', 'Антон Строй']
  ];

  return (
    <section className="scheme-page" aria-labelledby="scheme-title">
      <div className="scheme-canvas">
        <h1 id="scheme-title">Масоны Самсона</h1>
        <svg className="scheme-lines" viewBox="0 0 986 762" aria-hidden="true" focusable="false">
          <defs>
            <marker id="react-scheme-arrow" viewBox="0 0 8 8" refX="7" refY="4" markerWidth="8" markerHeight="8" orient="auto">
              <path d="M1 1 7 4 1 7" fill="none" stroke="currentColor" strokeWidth="1.1" />
            </marker>
          </defs>
          <SchemePath d="M743 116 H224" arrow />
          <SchemePath d="M723 116 V188 H743" />
          <SchemePath d="M743 259 H344" arrow />
          <SchemePath d="M123 720 V138" arrow />
          <SchemePath d="M123 260 H143" />
          <SchemePath d="M123 659 H143" />
          <SchemePath d="M123 721 H143" />
          <SchemePath d="M263 599 H243 V293" arrow />
          <SchemePath d="M243 343 H263" />
          <SchemePath d="M743 414 H464" arrow />
          <SchemePath d="M723 414 V538 H743" />
          <SchemePath d="M943 537 H963 V414 H943" arrow />
        </svg>
        {cards.map(([key, label]) => <div key={key} className={`scheme-card scheme-card--${key}`}>{label}</div>)}
      </div>
    </section>
  );
}

export { SchemePage };
