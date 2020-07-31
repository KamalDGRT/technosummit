<?php

namespace backend\controllers;

use common\models\EventRegistration;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
     * @return string
     */
    public function actionIndex()
    {
        $numberOfRegistrations = EventRegistration::find()->count();
        $numberOfRegistrationsConfirmed = EventRegistration::find()->eventConfirmed()->count();
        $numberOfRegistrationsNotConfirmed = EventRegistration::find()->eventNotConfirmed()->count();
        $totalParticipants = EventRegistration::find()->count('DISTINCT(r_email)');
        $totalColleges = EventRegistration::find()->count('DISTINCT(r_college)');
        $numberOfBoys = EventRegistration::find()->eventConfirmed()->isABoy()->count('DISTINCT(r_email)');
        $numberOfGirls = EventRegistration::find()->eventConfirmed()->isAGirl()->count('DISTINCT(r_email)');
        $numberOfUPI = EventRegistration::find()->eventConfirmed()->isUPI()->count();
        $numberOfBank = EventRegistration::find()->eventConfirmed()->isAccountTransfer()->count();
        return $this->render('index', [
            'numberOfRegistrations' => $numberOfRegistrations,
            'numberOfRegistrationsConfirmed' => $numberOfRegistrationsConfirmed,
            'numberOfRegistrationsNotConfirmed' => $numberOfRegistrationsNotConfirmed,
            'totalParticipants' => $totalParticipants,
            'totalColleges' => $totalColleges,
            'numberOfBoys' => $numberOfBoys,
            'numberOfGirls' => $numberOfGirls,
            'numberOfUPI' => $numberOfUPI,
            'numberOfBank' => $numberOfBank,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
