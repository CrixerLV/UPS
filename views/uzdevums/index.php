<?php

use app\models\Uzdevums;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UzdevumsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Tasks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uzdevums-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="flex">
        <?= Html::a(Yii::t('app', 'Create Task'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'API Endpoint'), ['api'], ['class' => 'btn btn-warning']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'text-center'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nosaukums',
            'termins',
            [
                'attribute' => 'statuss',
                'value' => function($model) {
                    return $model->statuss ? 'Finished' : 'Unfinished';
                },
                'contentOptions' => function($model) {
                    return [
                        'class' => $model->statuss ? 'text-success fw-bold' : 'text-danger fw-bold',
                    ];
                },
            ],

            [
                'class' => ActionColumn::className(''),
                'urlCreator' => function ($action, Uzdevums $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
