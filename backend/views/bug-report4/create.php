<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BugReport4 */

$this->title = Yii::t('app', 'ระบบแจ้งเตือน BugReport 4');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bug Report4s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
