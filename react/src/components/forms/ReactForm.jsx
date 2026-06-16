import { useState } from 'react';

function ReactForm() {
  const [values, setValues] = useState({
    name: '',
    moodColor: '#0000ff',
    comment: '',
    radioButton: false,
    agreement: false
  });
  const [message, setMessage] = useState('');
  const valid = values.name.trim() && values.agreement;

  function update(name, value) {
    setValues((current) => ({ ...current, [name]: value }));
  }

  function submit(event) {
    event.preventDefault();
    setMessage(
      valid
        ? `Форма собрала данные: ${values.name}, цвет ${values.moodColor}.`
        : 'Форма пока не заполнена полностью.'
    );
  }

  return (
    <article className="form-card">
      <form className="form form--yii" noValidate onSubmit={submit}>
        <fieldset className="form__fieldset">
          <legend>Основное</legend>
          <label className="form__field">
            <span>Имя</span>
            <input name="name" type="text" placeholder="по паспорту" autoComplete="name" required value={values.name} onChange={(event) => update('name', event.target.value)} />
          </label>
          <label className="form__field">
            <span>Цвет вашего настроения</span>
            <span className="form__color-row">
              <input name="moodColor" type="color" value={values.moodColor} onChange={(event) => update('moodColor', event.target.value)} />
              <output className="form__color-value">{values.moodColor}</output>
            </span>
          </label>
        </fieldset>
        <fieldset className="form__fieldset form__fieldset--extra">
          <legend>Дополнительное</legend>
          <label className="form__field">
            <span>Комментарий</span>
            <textarea name="comment" placeholder={'Напишите хоть что-нибудь.\nЕсли хотите, конечно.'} value={values.comment} onChange={(event) => update('comment', event.target.value)} />
          </label>
        </fieldset>
        <div className="form__bottom">
          <label className="form__choice">
            <input name="reactRadio" type="radio" checked={values.radioButton} onChange={() => update('radioButton', true)} />
            <span>А здесь лежит радиобатон</span>
          </label>
          <label className="form__choice form__choice--checkbox">
            <input name="reactAgreement" type="checkbox" required checked={values.agreement} onChange={(event) => update('agreement', event.target.checked)} />
            <span>Соглашаюсь на всё, что вы придумаете, и понимаю, что это может быть <a href="#">что угодно</a></span>
          </label>
          <button className="form__submit" type="submit">Отправить все мои данные</button>
          <p className={message ? 'form__message form__message--success' : 'form__message'} role="status" aria-live="polite">{message}</p>
        </div>
      </form>
    </article>
  );
}

export { ReactForm };
