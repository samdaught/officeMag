import { ReactForm } from '../components/forms/ReactForm.jsx';

function FormPage() {
  return (
    <section className="form-page" aria-labelledby="form-page-title">
      <header className="form-page__header">
        <h1 id="form-page-title">Заполните поля</h1>
        <p>Ну пожалуйста.</p>
      </header>
      <ReactForm />
    </section>
  );
}

export { FormPage };
