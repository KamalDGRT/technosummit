<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class EventController extends Controller
{
    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    public function actionRobokart() {
        $this->layout = false;
        return $this->render('robokart');
    }

    public function actionBlindcoding() {
        $this->layout = false;
        return $this->render('blindcoding');
    }

    public function actionSketch() {
        $this->layout = false;
        return $this->render('sketch');
    }

    public function actionWebworld() {
        $this->layout = false;
        return $this->render('webworld');
    }

    public function actionComiccrusaders() {
        $this->layout = false;
        return $this->render('comiccrusaders');
    }
}
