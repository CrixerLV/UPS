<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Uzdevums $model */

$this->title = Yii::t('app', 'Task Creation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Task'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uzdevums-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
