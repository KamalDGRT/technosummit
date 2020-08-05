<?php

namespace backend\controllers;

use common\models\EventRegistration;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class EventlistController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

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
        return $this->render('index');
    }

    public function actionFivemt()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find(),
            'pagination' => false
        ]);

        return $this->render('fivemt', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionRobokart()
    {
        return $this->render('robokart');
    }

    public function actionBlindcoding()
    {
        return $this->render('blindcoding');
    }

    public function actionMathmania()
    {
        return $this->render('mathmania');
    }

    public function actionEcotopia()
    {
        return $this->render('ecotopia');
    }

    public function actionCircuitronics()
    {
        return $this->render('circuitronics');
    }

    public function actionScientia()
    {
        return $this->render('scientia');
    }

    public function actionCodevita()
    {
        return $this->render('codevita');
    }

    public function actionConcept()
    {
        return $this->render('concept');
    }

    public function actionSeedyourstartup()
    {
        return $this->render('seedyourstartup');
    }

    public function actionCovidathon()
    {
        return $this->render('covidathon');
    }

    public function actionDandd()
    {
        return $this->render('dandd');
    }

    public function actionSketch()
    {
        return $this->render('sketch');
    }

    public function actionWebworld()
    {
        return $this->render('webworld');
    }

    public function actionComiccrusaders()
    {
        return $this->render('comiccrusaders');
    }

    public function actionTechiedeb()
    {
        return $this->render('techiedeb');
    }

    public function actionExquizme()
    {
        return $this->render('exquizme');
    }

    public function actionFilmina()
    {
        return $this->render('filmina');
    }

    public function actionAerozone()
    {
        return $this->render('aerozone');
    }

    public function actionAiworkshop()
    {
        return $this->render('aiworkshop');
    }

    public function actionDavincicode()
    {
        return $this->render('davincicode');
    }

    public function actionUnselected()
    {
        return $this->render('unselected');
    }
}
