<?php

namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;
use common\models\Tickets;

class TicketsController extends \yii\rest\ActiveController
{
    public $modelClass = 'common\models\Tickets';

    public function actions()
    {
        $actions = parent::actions();
        //unset($actions['index']);
        //unset($actions['create']);
        //unset($actions['delete']);
        unset($actions['update']);
        //unset($actions['view']);
        return $actions;
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate($id)
    {
        $model = Tickets::find()->where(['id' => $id])->one();
        if ($model->status == 'bought') {
            throw new ServerErrorHttpException('This ticket is sold.');
        } else {
            $model->load(\Yii::$app->getRequest()->getBodyParams(), '');
            $model->save();
        }

        return $model;
    }

}
