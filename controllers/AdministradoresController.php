<?php

namespace app\controllers;

use app\models\Administradores;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdministradoresController implements the CRUD actions for Administradores model.
 */
class AdministradoresController extends Controller
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
     * Lists all Administradores models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Administradores::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'codigo_a' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Administradores model.
     * @param int $codigo_a Codigo A
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($codigo_a)
    {
        return $this->render('view', [
            'model' => $this->findModel($codigo_a),
        ]);
    }

    /**
     * Creates a new Administradores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Administradores();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'codigo_a' => $model->codigo_a]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Administradores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $codigo_a Codigo A
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($codigo_a)
    {
        $model = $this->findModel($codigo_a);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo_a' => $model->codigo_a]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Administradores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $codigo_a Codigo A
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($codigo_a)
    {
        $this->findModel($codigo_a)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Administradores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $codigo_a Codigo A
     * @return Administradores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codigo_a)
    {
        if (($model = Administradores::findOne(['codigo_a' => $codigo_a])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
