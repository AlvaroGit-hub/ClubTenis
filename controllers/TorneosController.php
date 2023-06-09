<?php

namespace app\controllers;

use app\models\Torneos;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TorneosController implements the CRUD actions for Torneos model.
 */
class TorneosController extends Controller
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
     * Lists all Torneos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Torneos::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'codigo_t' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Torneos model.
     * @param int $codigo_t Codigo T
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($codigo_t)
{
    $model = $this->findModel($codigo_t);
    
    // Check if the user is registered
    $isRegistered = false;
    // You can use your own logic here to determine if the user is registered
    
    return $this->render('view', [
        'model' => $model,
        'isRegistered' => $isRegistered,
    ]);
}


    /**
     * Creates a new Torneos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Torneos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'codigo_t' => $model->codigo_t]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Torneos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $codigo_t Codigo T
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($codigo_t)
    {
        $model = $this->findModel($codigo_t);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo_t' => $model->codigo_t]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Torneos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $codigo_t Codigo T
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($codigo_t)
    {
        $this->findModel($codigo_t)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Torneos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $codigo_t Codigo T
     * @return Torneos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codigo_t)
    {
        if (($model = Torneos::findOne(['codigo_t' => $codigo_t])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionRegister($codigo_t)
{
    $model = $this->findModel($codigo_t);

    // Check if the user is already registered
    // You can use your own logic here to determine if the user is registered

    // If the user is not registered, you can register them
    // For example:
    // $model->registeredUsers()->attach(Yii::$app->user->id);

    // Redirect the user to a success page or a different action
    return $this->redirect(['view', 'codigo_t' => $model->codigo_t]);
}



}
