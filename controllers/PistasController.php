<?php

namespace app\controllers;

use app\models\Pistas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PistasController implements the CRUD actions for Pistas model.
 */
class PistasController extends Controller
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
     * Lists all Pistas models.
     *
     * @return string
     */
   /**
 * Lists all Pistas models.
 *
 * @return string
 */
public function actionIndex()
{
    $dataProvider = new ActiveDataProvider([
        'query' => Pistas::find(),
    ]);

    $pistas = Pistas::find()->all(); // Fetch the "Pistas" data from the database

    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'pistas' => $pistas, // Pass the fetched data to the view
    ]);
}



    /**
     * Displays a single Pistas model.
     * @param int $codigo_p Codigo P
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
  public function actionView($codigo_p)
{
    $model = $this->findModel($codigo_p);

    // Assuming 'reservas' is the action name for the reservas page
    return $this->redirect(['reservas', 'codigo_p' => $model->codigo_p]);
}

    /**
     * Creates a new Pistas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pistas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'codigo_p' => $model->codigo_p]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pistas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $codigo_p Codigo P
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($codigo_p)
    {
        $model = $this->findModel($codigo_p);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo_p' => $model->codigo_p]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pistas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $codigo_p Codigo P
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($codigo_p)
    {
        $this->findModel($codigo_p)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pistas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $codigo_p Codigo P
     * @return Pistas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codigo_p)
    {
        if (($model = Pistas::findOne(['codigo_p' => $codigo_p])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
