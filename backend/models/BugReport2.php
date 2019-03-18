<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bug_report2".
 *
 * @property int $id รหัส
 * @property string $title หัวเรื่อง
 * @property string $detail
 * @property int $rstat
 * @property string $date_start
 * @property int $forder
 */
class BugReport2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bug_report2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id', 'title', 'detail', 'rstat', 'date_start', 'forder'], 'required'],
            [['id', 'rstat', 'forder'], 'integer'],
            [['detail'], 'string'],
            [['date_start'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'รหัส'),
            'title' => Yii::t('app', 'หัวเรื่อง'),
            'detail' => Yii::t('app', 'Detail'),
            'rstat' => Yii::t('app', 'Rstat'),
            'date_start' => Yii::t('app', 'Date Start'),
            'forder' => Yii::t('app', 'Forder'),
        ];
    }
}
