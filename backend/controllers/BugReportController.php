<?php

namespace backend\controllers;

use Yii;
use backend\models\BugReport;
use backend\models\bugreportSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BugReportController implements the CRUD actions for BugReport model.
 */
class BugReportController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all BugReport models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new bugreportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BugReport model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
            'id'=>$id
        ]);
    }
    public function actionMessage(){
        $id = Yii::$app->request->get('id', '');
        $model = $this->findModel($id);
        $files = \backend\models\Files::find()->where(['re_id'=>$model->id])->all();
        
        $query = \backend\models\Messages::find()->where(['b_id'=>$id])->orderBy(['id'=>SORT_DESC]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 50,
            ]
        ]);
        return $this->renderAjax('message', [
            'model' => $model,
            'files'=>$files,
            'dataProvider'=>$dataProvider
        ]);
    }
    /**
     * Creates a new BugReport model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() { //bug-report/create
        $model = new BugReport();

        if ($model->load(Yii::$app->request->post())) {// เมื่อมีการ  post หรือ submit form เข้ามาจะทำงานส่วนนี้
            $model->id = time();
            $model->rstat = 0;
            $model->date_start = date('Y-m-d H:i:s');
            $model->forder = time();
            if ($model->save()) {
                $files = \yii\web\UploadedFile::getInstances($model,'file');
                $path = \Yii::getAlias('@storage')."/files";
                foreach($files as $file){
                    $new_file_name = date('dmYHis').'_'. rand(99, 9999).".".$file->extension;
                    $file->saveAs("{$path}/{$new_file_name}");
                    $model_file = new \backend\models\Files();
                    $model_file->file_name =$new_file_name;
                    $model_file->re_id = $model->id;
                    $model->forder = date('YmdHis');
                    $model_file->save();
                }
                return \yii\helpers\Json::encode(['status'=>'success']); 
            }
        }
        return $this->renderAjax('create', [
                    'model' => $model,
        ]);
    }
    public function actionSaveMessage() { //bug-report/create
       if(Yii::$app->request->post()){
           $message = \Yii::$app->request->post('message', '');
           $b_id = \Yii::$app->request->post('b_id', '');
           $model = new \backend\models\Messages();
           //$model->id = time();
           $model->b_id = $b_id;
           $model->user_id = isset(Yii::$app->user->id)?Yii::$app->user->id:'1';
           $model->date = date('Y-m-d H:i:s');
           $model->message = $message;
           if($model->save()){
               return \yii\helpers\Json::encode(["statu"=>true, "message"=>'Save message success']);
           }else{
               return \yii\helpers\Json::encode($model->errors);
           }
           
       }
    }

    /**
     * Updates an existing BugReport model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BugReport model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BugReport model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BugReport the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BugReport::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    
        public function actionModalAjax()
    {
       $model = new BugReport();

        return $this->renderAjax('create', [
           'model'=>$model
        ]);
    }
}
