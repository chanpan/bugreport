<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bug_report6".
 *
 * @property int $id รหัส
 * @property string $title หัวข้อ
 * @property string $detail รายละเอียด
 * @property int $rstat
 * @property string $date_start วันที่สร้าง
 * @property int $forder
 */
class BugReport6 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bug_report6';
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
            'title' => Yii::t('app', 'หัวข้อ'),
            'detail' => Yii::t('app', 'รายละเอียด'),
            'rstat' => Yii::t('app', 'Rstat'),
            'date_start' => Yii::t('app', 'วันที่สร้าง'),
            'forder' => Yii::t('app', 'Forder'),
        ];
    }
}
