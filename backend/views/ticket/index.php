<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ticketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tickets-index box box-primary">
        <div class="box-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="box-body">
            <p>
                <?= Html::a('Create Tickets', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
    
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    //['class' => 'yii\grid\SerialColumn'],
    
                    //'id',
                    'row',
                    'place',
                    [
                        'attribute' => 'status',
                        'format' => 'raw',
                        //'filter' => ArrayHelper::map(Pizzerias::find()->all(), 'id', 'name'),
                        'filter' => [
                            'free' => 'Свободный',
                            'booked' => 'Забронированный',
                            'bought' => 'Продан',
                        ],
                        'value' => function($data) {
                            $dataLabels = [
                                'free' => '<div class="label bg-green">Свободный</div>',
                                'booked' => '<div class="label bg-yellow">Забронированный</div>',
                                'bought' => '<div class="label bg-red">Продан</div>',
                            ];

                            return $dataLabels[$data->status];
                        }
                    ],
    
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>

</div>
