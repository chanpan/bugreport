<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\bugreport7Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bug Report7s');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report7-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Bug Report7'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'detail:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>


 <div class="container">
        <h2>Bug Report</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-lg btnmodal-ajax" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Bug Report</h4>
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

<?php 
$this->registerJs("
    
     $('.btnmodal-ajax').click(function(){
       $.ajax({
            url:'" . Url::to(['/bug-report/modal-ajax']) . "',
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