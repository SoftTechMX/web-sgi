<?php

namespace app\controllers;

use app\models\DetalleOrden;
use app\models\DetalleOrdenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetalleOrdenController implements the CRUD actions for DetalleOrden model.
 */
class DetalleOrdenController extends Controller
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
     * Lists all DetalleOrden models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetalleOrdenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetalleOrden model.
     * @param int $ordenid Ordenid
     * @param int $detalleid Detalleid
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ordenid, $detalleid)
    {
        return $this->render('view', [
            'model' => $this->findModel($ordenid, $detalleid),
        ]);
    }

    /**
     * Creates a new DetalleOrden model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetalleOrden();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ordenid' => $model->ordenid, 'detalleid' => $model->detalleid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetalleOrden model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ordenid Ordenid
     * @param int $detalleid Detalleid
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ordenid, $detalleid)
    {
        $model = $this->findModel($ordenid, $detalleid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ordenid' => $model->ordenid, 'detalleid' => $model->detalleid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetalleOrden model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ordenid Ordenid
     * @param int $detalleid Detalleid
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ordenid, $detalleid)
    {
        $this->findModel($ordenid, $detalleid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetalleOrden model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ordenid Ordenid
     * @param int $detalleid Detalleid
     * @return DetalleOrden the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ordenid, $detalleid)
    {
        if (($model = DetalleOrden::findOne(['ordenid' => $ordenid, 'detalleid' => $detalleid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
