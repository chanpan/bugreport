<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BugReport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bug-report-form">



    <a href="_form.php"></a>
    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'date_start')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
