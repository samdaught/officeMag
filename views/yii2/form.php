<?php

/** @var yii\web\View $this */
/** @var app\models\Form $model */
/** @var array|null $submittedData */

use app\assets\AppAsset;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$textareaPlaceholder = "Напишите хоть что-нибудь.\nЕсли хотите, конечно.";

$this->title = 'Демонстрация форм';
$this->params['meta_description'] = 'Страница с HTML/CSS/JS-формой и формой на Yii2 ActiveForm.';
$this->registerCssFile('@web/css/form.css', ['depends' => [AppAsset::class]]);
$this->registerJsFile('@web/js/form.js', ['depends' => [AppAsset::class]]);
?>

<section class="form-page" aria-labelledby="form-page-title">
    <header class="form-page__header">
        <h1 id="form-page-title">Заполните поля</h1>
        <p>Ну пожалуйста.</p>
    </header>

    <article class="form-card" aria-labelledby="vanilla-form-title">
        <h2 id="vanilla-form-title">HTML/CSS/JS-реализация</h2>

        <form class="form vanilla-form" novalidate>
            <fieldset class="form__fieldset">
                <legend>Основное</legend>

                <label class="form__field">
                    <span>Имя</span>
                    <input name="name" type="text" placeholder="по паспорту" autocomplete="name" required>
                </label>

                <label class="form__field">
                    <span>Цвет вашего настроения</span>
                    <span class="form__color-row">
                        <input name="moodColor" type="color" value="#0000ff" aria-describedby="vanilla-color-value">
                        <output id="vanilla-color-value" class="form__color-value">#0000ff</output>
                    </span>
                </label>
            </fieldset>

            <fieldset class="form__fieldset form__fieldset--extra">
                <legend>Дополнительное</legend>

                <label class="form__field">
                    <span>Комментарий</span>
                    <textarea name="comment" placeholder="<?= Html::encode($textareaPlaceholder) ?>"></textarea>
                </label>
            </fieldset>

            <div class="form__bottom">
                <label class="form__choice">
                    <input name="radioButton" type="radio" value="selected">
                    <span>А здесь лежит радиобатон</span>
                </label>

                <label class="form__choice form__choice--checkbox">
                    <input name="agreement" type="checkbox" required>
                    <span>
                        Соглашаюсь на всё, что вы придумаете, и понимаю, что это может быть
                        <a href="#">что угодно</a>
                    </span>
                </label>

                <button class="form__submit" type="submit">Отправить все мои данные</button>
                <p class="form__message" role="status" aria-live="polite"></p>
            </div>
        </form>
    </article>

    <article class="form-card" aria-labelledby="yii-form-title">
        <h2 id="yii-form-title">Yii2-реализация</h2>

        <?php if ($submittedData !== null): ?>
            <div class="form__server-result" role="status">
                <strong>Сервер получил данные:</strong>
                <dl>
                    <div>
                        <dt>Имя</dt>
                        <dd><?= Html::encode((string) $submittedData['name']) ?></dd>
                    </div>
                    <div>
                        <dt>Цвет</dt>
                        <dd><?= Html::encode((string) $submittedData['moodColor']) ?></dd>
                    </div>
                    <div>
                        <dt>Комментарий</dt>
                        <dd><?= Html::encode((string) $submittedData['comment']) ?></dd>
                    </div>
                </dl>
            </div>
        <?php endif ?>

        <?php $form = ActiveForm::begin([
            'id' => 'yii-form',
            'options' => ['class' => 'form form--yii'],
            'fieldConfig' => [
                'options' => ['class' => 'form__field yii-field'],
                'labelOptions' => ['class' => 'form__label'],
                'inputOptions' => ['class' => 'form-control'],
                'errorOptions' => ['class' => 'invalid-feedback d-block form__error'],
            ],
        ]) ?>
            <fieldset class="form__fieldset">
                <legend>Основное</legend>

                <?= $form->field($model, 'name')->textInput([
                    'placeholder' => 'по паспорту',
                    'autocomplete' => 'name',
                ]) ?>

                <?= $form->field($model, 'moodColor')->input('color', [
                    'class' => 'form-control form__color-input',
                ]) ?>
            </fieldset>

            <fieldset class="form__fieldset form__fieldset--extra">
                <legend>Дополнительное</legend>

                <?= $form->field($model, 'comment')->textarea([
                    'rows' => 4,
                    'placeholder' => $textareaPlaceholder,
                ]) ?>
            </fieldset>

            <div class="form__bottom">
                <div class="form__choice-wrap">
                    <?= Html::activeRadio($model, 'radioButton', [
                        'class' => 'form-check-input',
                        'id' => 'form-radiobutton',
                        'label' => false,
                        'value' => 'selected',
                        'uncheck' => null,
                    ]) ?>
                    <label class="form-check-label" for="form-radiobutton">А здесь лежит радиобатон</label>
                    <?= Html::error($model, 'radioButton', ['class' => 'invalid-feedback d-block form__error']) ?>
                </div>

                <div class="form__choice-wrap form__choice-wrap--checkbox">
                    <?= Html::activeCheckbox($model, 'agreement', [
                        'class' => 'form-check-input',
                        'id' => 'form-agreement',
                        'label' => false,
                        'required' => true,
                    ]) ?>
                    <label class="form-check-label" for="form-agreement">
                        Соглашаюсь на всё, что вы придумаете, и понимаю, что это может быть
                        <?= Html::a('что угодно', '#') ?>
                    </label>
                    <?= Html::error($model, 'agreement', ['class' => 'invalid-feedback d-block form__error']) ?>
                </div>

                <?= Html::submitButton('Отправить все мои данные', ['class' => 'form__submit']) ?>
            </div>
        <?php ActiveForm::end() ?>
    </article>
</section>
