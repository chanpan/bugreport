<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model backend\models\BugReport5 */

$this->title = Yii::t('app', 'ระบบแจ้งเตือน Bug Report5');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bug Report5s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report5-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
