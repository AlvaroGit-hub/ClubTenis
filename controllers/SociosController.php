<?php

namespace app\controllers;

use app\models\Socios;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SociosController implements the CRUD actions for Socios model.
 */
class SociosController extends Controller
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
     * Lists all Socios models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Socios::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'codigo_s' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Socios model.
     * @param int $codigo_s Codigo S
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($codigo_s)
    {
        return $this->render('view', [
            'model' => $this->findModel($codigo_s),
        ]);
    }

    /**
     * Creates a new Socios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Socios();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'codigo_s' => $model->codigo_s]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Socios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $codigo_s Codigo S
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($codigo_s)
    {
        $model = $this->findModel($codigo_s);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo_s' => $model->codigo_s]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Socios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $codigo_s Codigo S
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($codigo_s)
    {
        $this->findModel($codigo_s)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Socios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $codigo_s Codigo S
     * @return Socios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codigo_s)
    {
        if (($model = Socios::findOne(['codigo_s' => $codigo_s])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
