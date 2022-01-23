<?php

namespace app\controllers;

use app\models\UnidadeModel;
use app\models\UnidadeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UnidadeController implements the CRUD actions for UnidadeModel model.
 */
class UnidadeController extends Controller
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
     * Lists all UnidadeModel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UnidadeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UnidadeModel model.
     * @param string $identificacao Identificacao
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($identificacao)
    {
        return $this->render('view', [
            'model' => $this->findModel($identificacao),
        ]);
    }

    /**
     * Creates a new UnidadeModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UnidadeModel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'identificacao' => $model->identificacao]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UnidadeModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $identificacao Identificacao
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($identificacao)
    {
        $model = $this->findModel($identificacao);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'identificacao' => $model->identificacao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UnidadeModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $identificacao Identificacao
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($identificacao)
    {
        $this->findModel($identificacao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UnidadeModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $identificacao Identificacao
     * @return UnidadeModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($identificacao)
    {
        if (($model = UnidadeModel::findOne(['identificacao' => $identificacao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
