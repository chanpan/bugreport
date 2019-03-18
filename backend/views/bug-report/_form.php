<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BugReport */
/* @var $form yii\widgets\ActiveForm */

//'enctype' => 'multipart/form-data' เอาไว้แนบไฟล์สำหรับอัปโหลด อันเดียวกัน
?>

<div class="bug-report-form">

    <?php $form = ActiveForm::begin([
        'id'=>$model->formName(),
        'options' => ['enctype' => 'multipart/form-data'
    ]]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file[]')->fileInput(['multiple' => true]); // อัปโหดลหลายรูป ?>
    <div class="form-group text-center"> 
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        <?= Html::Button(Yii::t('app', 'Cancel'), ['class' => 'btn btn-warning','id'=> 'btn-clear1']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
    $('#btn-clear1').click(function(){
       $('#bugreport-title').val('');
       $('#bugreport-detail').val('');
    });
    
    $('#{$model->formName()}').on('beforeSubmit', function(e) { //submit form
        var \$form = $(this); //รับค่าจาก ฟอร์ม
        $.ajax({
          url: \$form.attr('action'),
          type: 'POST',
          data: new FormData( this ),
          processData: false,
          contentType: false,
          success: function(result){
             console.log(result);
          }
        });
        return false;
    });


");
?>