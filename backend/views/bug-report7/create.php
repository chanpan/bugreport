<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BugReport7 */

$this->title = Yii::t('app', 'Create Bug Report7');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bug Report7s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report7-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
