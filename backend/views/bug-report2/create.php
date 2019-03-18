<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model backend\models\BugReport2 */

$this->title = Yii::t('app', 'ระบบแจ้งเตือน Bug2');

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bug Report2s'), 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report2-create">
    
    <h1><i class="glyphicon glyphicon-list style sm"> <?= Html::encode($this->title) ?></i></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
