<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\Form;
use Yii;
use yii\web\Controller;

class Yii2Controller extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('text');
    }

    public function actionText(): string
    {
        return $this->render('text');
    }

    public function actionForm(): string
    {
        $model = new Form();
        $submittedData = null;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $submittedData = $model->attributes;
            Yii::$app->session->setFlash('success', 'Yii2-форма прошла серверную валидацию.');
        }

        return $this->render('form', [
            'model' => $model,
            'submittedData' => $submittedData,
        ]);
    }

    public function actionButtons(): string
    {
        return $this->render('buttons');
    }

    public function actionScheme(): string
    {
        return $this->render('scheme');
    }

    public function actionSlider(): string
    {
        return $this->render('slider');
    }

    public function actionToggle(): string
    {
        return $this->render('toggle');
    }

    public function actionBeauty(): string
    {
        return $this->render('beauty');
    }

    public function actionBlackPage(): string
    {
        return $this->render('black-page');
    }
}
