<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Uzdevums $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="uzdevums-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nosaukums')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'termins')->input('date') ?>

    <?= $form->field($model, 'statuss')->dropDownList([
        '1' => 'Finished',
        '0' => 'Unfinished',
    ], ['prompt' => 'Choose a status']) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Create'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
