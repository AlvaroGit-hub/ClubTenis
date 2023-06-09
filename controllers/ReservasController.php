<?php

namespace app\controllers;
use app\models\Pistas;
use Yii;
use app\models\Reservas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReservasController implements the CRUD actions for Reservas model.
 */
class ReservasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Reservas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Reservas::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'codigo_r' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reservas model.
     * @param int $codigo_r Codigo R
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($codigo_r)
    {
        return $this->render('view', [
            'model' => $this->findModel($codigo_r),
        ]);
    }

    /**
     * Creates a new Reservas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
   public function actionCreate()
{
    $model = new Reservas();
    
    if (!Yii::$app->user->isGuest) {
        $model->quien = Yii::$app->user->identity->username;
    }
 
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        // Redirect to the view page of the created Reservas model
        return $this->redirect(['view', 'codigo_r' => $model->codigo_r]);
    }
 
    return $this->render('create', [
        'model' => $model,
    ]);
}



    /**
     * Updates an existing Reservas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $codigo_r Codigo R
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($codigo_r)
    {
        $model = $this->findModel($codigo_r);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo_r' => $model->codigo_r]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Reservas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $codigo_r Codigo R
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($codigo_r)
    {
        $this->findModel($codigo_r)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reservas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $codigo_r Codigo R
     * @return Reservas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codigo_r)
    {
        if (($model = Reservas::findOne(['codigo_r' => $codigo_r])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
}
