<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BugReport6 */

$this->title = Yii::t('app', '(ระบบแจ้งเตือน)Create Bug Report6');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bug Report6s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report6-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
