<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BugReport */

$this->title = Yii::t('app', 'ระบบแจ้งเตือน Bug Report');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bug Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report-create">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
   
</div>
