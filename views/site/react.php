<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Json;

$this->title = 'React-версия';
$this->params['meta_description'] = 'React-версия тестового задания с теми же демонстрационными страницами.';

$assetDepends = ['depends' => [AppAsset::class]];
$this->registerCssFile('@web/css/text.css', $assetDepends);
$this->registerCssFile('@web/css/form.css', $assetDepends);
$this->registerCssFile('@web/css/buttons.css', $assetDepends);
$this->registerCssFile('@web/css/scheme.css', $assetDepends);
$this->registerCssFile('@web/css/slider.css', $assetDepends);
$this->registerCssFile('@web/css/toggle.css', $assetDepends);
$this->registerCssFile('@web/css/beauty.css', $assetDepends);
$this->registerCssFile('@web/css/black-page.css', $assetDepends);
$this->registerCssFile('@web/css/react.css', $assetDepends);

$config = [
    'imageRootUrl' => Yii::getAlias('@web/images'),
    'imageBaseUrl' => Yii::getAlias('@web/images/showcase'),
    'routerBaseUrl' => Yii::getAlias('@web/react'),
];
?>

<div id="react-root"></div>

<script>
window.OfficeMagReactConfig = <?= Json::htmlEncode($config) ?>;
</script>
<script type="module" src="/react-app/app.js"></script>
