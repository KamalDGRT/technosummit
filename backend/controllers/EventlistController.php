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

        $pageTitle = EventRegistration::getEventLabels()[1];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionBlindcoding()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(2),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[2];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionMathmania()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(3),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[3];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionEcotopia()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(4),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[4];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionCircuitronics()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(5),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[5];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionScientia()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(6),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[6];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionCodevita()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(7),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[7];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionConcept()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(8),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[8];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionSeedyourstartup()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(9),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[9];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionCovidathon()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(10),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[10];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionDandd()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(11),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[11];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionSketch()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(12),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[12];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionWebworld()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(13),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[13];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionComiccrusaders()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(14),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[14];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionTechiedeb()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(15),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[15];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionExquizme()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(16),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[16];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
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

        $pageTitle = EventRegistration::getEventLabels()[18];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionAerozone()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(19),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[19];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionAiworkshop()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(20),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[20];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionDavincicode()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(21),
            'pagination' => false
        ]);

        $pageTitle = EventRegistration::getEventLabels()[21];

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionUnselected()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->fromEvent(0),
            'pagination' => false
        ]);

        $pageTitle = 'Unselected But Confirmed';

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionBoys()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isABoy(),
            'pagination' => false
        ]);

        $pageTitle = 'Boys List';

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionGirls()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isAGirl(),
            'pagination' => false
        ]);

        $pageTitle = 'Girls';

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionAccount()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isAccountTransfer(),
            'pagination' => false
        ]);

        $pageTitle = 'Account Transfer';

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }

    public function actionUpilist()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EventRegistration::find()->eventConfirmed()->isUPI(),
            'pagination' => false
        ]);

        $pageTitle = 'UPI Transactions';

        return $this->render('showevent', [
            'dataProvider' => $dataProvider,
            'pageTitle' => $pageTitle
        ]);
    }
}
