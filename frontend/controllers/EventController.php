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

    public function actionRobokart()
    {
        $this->layout = false;
        return $this->render('robokart');
    }

    public function actionBlindcoding()
    {
        $this->layout = false;
        return $this->render('blindcoding');
    }

    public function actionMathmania()
    {
        $this->layout = false;
        return $this->render('mathmania');
    }

    public function actionEcotopia()
    {
        $this->layout = false;
        return $this->render('ecotopia');
    }

    public function actionCircuitronics()
    {
        $this->layout = false;
        return $this->render('circuitronics');
    }

    public function actionScientia()
    {
        $this->layout = false;
        return $this->render('scientia');
    }

    public function actionCodevita()
    {
        $this->layout = false;
        return $this->render('codevita');
    }

    public function actionConcept()
    {
        $this->layout = false;
        return $this->render('concept');
    }

    public function actionSeedyourstartup()
    {
        $this->layout = false;
        return $this->render('seedyourstartup');
    }

    public function actionCovidathon()
    {
        $this->layout = false;
        return $this->render('covidathon');
    }

    public function actionDandd()
    {
        $this->layout = false;
        return $this->render('dandd');
    }

    public function actionSketch()
    {
        $this->layout = false;
        return $this->render('sketch');
    }

    public function actionWebworld()
    {
        $this->layout = false;
        return $this->render('webworld');
    }

    public function actionComiccrusaders()
    {
        $this->layout = false;
        return $this->render('comiccrusaders');
    }

    public function actionTechiedeb()
    {
        $this->layout = false;
        return $this->render('techiedeb');
    }

    public function actionExquizme()
    {
        $this->layout = false;
        return $this->render('exquizme');
    }

    public function actionFivemt()
    {
        $this->layout = false;
        return $this->render('fivemt');
    }

    public function actionFilmina()
    {
        $this->layout = false;
        return $this->render('filmina');
    }

    public function actionAerozone()
    {
        $this->layout = false;
        return $this->render('aerozone');
    }

    public function actionAiworkshop()
    {
        $this->layout = false;
        return $this->render('aiworkshop');
    }

    public function actionDavincicode()
    {
        $this->layout = false;
        return $this->render('davincicode');
    }
}
