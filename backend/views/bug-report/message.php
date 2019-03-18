<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BugReport */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'แจ้งปัญหาระบบ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

ความคิดเห็น 

<div>
    <?=
    \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
        ],
        'layout' => "{pager}\n{items}\n{summary}",
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_items',['model' => $model]);

            // or just do some echo
            // return $model->title . ' posted by ' . $model->author;
        },
    ]);
    ?>
</div>
<hr>


