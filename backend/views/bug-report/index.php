<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\bugreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bug Reports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-success btnmodal-ajax pull-right" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon glyphicon-plus "></i></button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class="glyphicon glyphicon-certificate" style="color: gold"> Bug Report</i></h4>
                    </div>
                    <div class="modal-body">
                        <div id="btn-clear2"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
</div>
    </br>
    


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'name',
            //'email',
            //'detail:ntext',
            //'rstat',
            //'date_start',
            //'forder',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    
</div>

<?php 
$this->registerJs("
    
     $('.btnmodal-ajax').click(function(){
       $.ajax({
            url:'" . Url::to(['/bug-report/create']) . "',
            method:'GET',
            success:function(a){
               $('#btn-clear2').html(a); 
               
            },error: function (xhr, ajaxOptions, thrownError) {
               console.log(xhr);
            }
        });
     


    });
    



    ");

?>