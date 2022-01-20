<?php

namespace app\controllers;

use app\models\InquilinoModel;
use app\models\InquilinoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InquilinoController implements the CRUD actions for InquilinoModel model.
 */
class InquilinoController extends Controller
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
     * Lists all InquilinoModel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InquilinoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InquilinoModel model.
     * @param string $idNome Id Nome
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idNome)
    {
        return $this->render('view', [
            'model' => $this->findModel($idNome),
        ]);
    }

    /**
     * Creates a new InquilinoModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InquilinoModel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idNome' => $model->idNome]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InquilinoModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idNome Id Nome
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idNome)
    {
        $model = $this->findModel($idNome);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idNome' => $model->idNome]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InquilinoModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idNome Id Nome
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idNome)
    {
        $this->findModel($idNome)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InquilinoModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idNome Id Nome
     * @return InquilinoModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idNome)
    {
        if (($model = InquilinoModel::findOne(['idNome' => $idNome])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
