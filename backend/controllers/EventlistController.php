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

    public function actionRobokart()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(1),
            'pagination' => false
        ]);


        return $this->render('robokart', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBlindcoding()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(2),
            'pagination' => false
        ]);

        return $this->render('blindcoding', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionMathmania()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(3),
            'pagination' => false
        ]);

        return $this->render('mathmania', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionEcotopia()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(4),
            'pagination' => false
        ]);

        return $this->render('ecotopia', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCircuitronics()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(5),
            'pagination' => false
        ]);

        return $this->render('circuitronics', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionScientia()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(6),
            'pagination' => false
        ]);

        return $this->render('scientia', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCodevita()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(7),
            'pagination' => false
        ]);

        return $this->render('codevita', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionConcept()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(8),
            'pagination' => false
        ]);

        return $this->render('concept', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSeedyourstartup()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(9),
            'pagination' => false
        ]);

        return $this->render('seedyourstartup', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCovidathon()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(10),
            'pagination' => false
        ]);

        return $this->render('covidathon', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDandd()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(11),
            'pagination' => false
        ]);

        return $this->render('dandd', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSketch()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(12),
            'pagination' => false
        ]);

        return $this->render('sketch', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionWebworld()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(13),
            'pagination' => false
        ]);

        return $this->render('webworld', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionComiccrusaders()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(14),
            'pagination' => false
        ]);

        return $this->render('comiccrusaders', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTechiedeb()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(15),
            'pagination' => false
        ]);

        return $this->render('techiedeb', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionExquizme()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(16),
            'pagination' => false
        ]);

        return $this->render('exquizme', [
            'dataProvider' => $dataProvider,

        ]);
    }

    public function actionFivemt()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(17),
            'pagination' => false
        ]);

        return $this->render('fivemt', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionFilmina()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(18),
            'pagination' => false
        ]);

        return $this->render('filmina', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAerozone()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(19),
            'pagination' => false
        ]);

        return $this->render('aerozone', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAiworkshop()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(20),
            'pagination' => false
        ]);

        return $this->render('aiworkshop', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDavincicode()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(21),
            'pagination' => false
        ]);

        return $this->render('davincicode', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUnselected()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(0),
            'pagination' => false
        ]);

        return $this->render('unselected', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBoys()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isABoy(),
            'pagination' => false
        ]);

        return $this->render('boys', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionGirls()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isAGirl(),
            'pagination' => false
        ]);

        return $this->render('girls', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAccount()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isAccountTransfer(),
            'pagination' => false
        ]);

        return $this->render('account', [
            'dataProvider' => $dataProvider,

        ]);
    }

    public function actionUpilist()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isUPI(),
            'pagination' => false
        ]);

        return $this->render('upilist', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCompletelist()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find(),
            'pagination' => false
        ]);

        return $this->render('completelist', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}
