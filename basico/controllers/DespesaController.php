<?php

namespace app\controllers;

use app\models\DespesaModel;
use app\models\DespesaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DespesaController implements the CRUD actions for DespesaModel model.
 */
class DespesaController extends Controller
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
     * Lists all DespesaModel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DespesaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DespesaModel model.
     * @param string $descricao Descricao
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($descricao)
    {
        return $this->render('view', [
            'model' => $this->findModel($descricao),
        ]);
    }

    /**
     * Creates a new DespesaModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DespesaModel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'descricao' => $model->descricao]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DespesaModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $descricao Descricao
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($descricao)
    {
        $model = $this->findModel($descricao);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'descricao' => $model->descricao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DespesaModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $descricao Descricao
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($descricao)
    {
        $this->findModel($descricao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DespesaModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $descricao Descricao
     * @return DespesaModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($descricao)
    {
        if (($model = DespesaModel::findOne(['descricao' => $descricao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
