<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegForm;
use app\models\AccountForm;
use app\models\OrderForm;
use app\models\Pizza;
use app\models\Pizza_Page;
use app\models\PizzaQuery;

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
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
      $Pizza = Pizza::find()->where(['type_blud'=>'Пицца'])->all();
      $Eda = Pizza::find()->where(['type_blud'=>'Еда'])->all();
      $Napitok = Pizza::find()->where(['type_blud'=>'Напиток'])->all();
        return $this->render('pizza',['Pizza'=>$Pizza,'Eda'=>$Eda,'Napitok'=>$Napitok]);
        // return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionRegistration()
    {
      if (!Yii::$app->user->isGuest) {
          return $this->goHome();
      }

      $model = new RegForm();
      if ($model->load(Yii::$app->request->post()) && $model->registration()) {
          return $this->goBack();
      }

      $model->Password = '';
      return $this->render('registration', [
          'model' => $model,
      ]);
    }
    public function actionAccount()
    {
      if (!Yii::$app->user->isGuest) {
          return $this->goHome();
      }

      $model = new AccountForm();
      if ($model->load(Yii::$app->request->post()) && $model->account()) {
          return $this->goBack();
      }

      return $this->render('account', [
          'model' => $model,
      ]);
    }
    public function actionPizza()
    {
      $Pizza = Pizza::find()->where(['type_blud'=>'Пицца'])->all();
        return $this->render('pizza',['NPizza'=>$Pizza]);
    }

    public function actionPizzaPage()
    {
      $Pizza = Pizza::find()->where(['type_blud'=>'Пицца'])->all();
      $Eda = Pizza::find()->where(['type_blud'=>'Еда'])->all();
      $Napitok = Pizza::find()->where(['type_blud'=>'Напиток'])->all();
        return $this->render('pizza_page',['Pizza'=>$Pizza,'Eda'=>$Eda,'Napitok'=>$Napitok]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionOrder()
    {
        return $this->render('order');
    }

}
