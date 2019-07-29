<?php

namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;
use common\models\Tickets;

class TicketsController extends \yii\rest\ActiveController
{
    public $modelClass = 'common\models\Tickets';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate($id)
    {
        $model = Tickets::find()->where(['id' => $id])->one();
        if ($model->status == 'bought') {
            throw new ServerErrorHttpException('This ticket is sold.');
        }

        return $model;

    }

}
