<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bug_report7".
 *
 * @property int $id รหัส
 * @property string $title หัวข้อ
 * @property string $detail รายละเอียด
 */
class BugReport7 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bug_report7';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'detail'], 'required'],
            [['id'], 'integer'],
            [['detail'], 'string'],
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
        ];
    }
}
