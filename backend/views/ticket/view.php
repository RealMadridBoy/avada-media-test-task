<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\tickets */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tickets-view box box-primary">
        <div class="box-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div class="box-body">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'id',
                    'row',
                    'place',
                    [
                        'attribute' => 'status',
                        'format' => 'raw',
                        'value' => function($data) {
                            $dataLabels = [
                                'free' => '<div class="label bg-green">Свободный</div>',
                                'booked' => '<div class="label bg-yellow">Забронированный</div>',
                                'bought' => '<div class="label bg-red">Продан</div>',
                            ];

                            return $dataLabels[$data->status];
                        }
                    ],
                ],
            ]) ?>
        </div>

</div>
