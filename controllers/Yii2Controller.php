<?php

declare(strict_types=1);

namespace app\controllers;

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
} 
